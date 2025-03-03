const { default: makeWASocket, useMultiFileAuthState, DisconnectReason } = require('baileys')
const { Boom } = require('@hapi/boom')
const express = require('express')
const qrcode = require('qrcode')
const fs = require('fs')

const app = express()
const port = 3000
let sock = null
let qrCodeData = ''

async function connectToWhatsApp() {
    const { state, saveCreds } = await useMultiFileAuthState('auth_info_baileys')

    sock = makeWASocket({
        auth: state
    })

    sock.ev.on('connection.update', async (update) => {
        const { connection, lastDisconnect, qr } = update

        if (qr) {
            console.log('QR Code mis à jour.')
            qrCodeData = await qrcode.toDataURL(qr)
        }

        if (connection === 'close') {
            const shouldReconnect = lastDisconnect?.error instanceof Boom
                ? lastDisconnect.error.output?.statusCode !== DisconnectReason.loggedOut
                : true;

            console.log('Connexion fermée en raison de :', lastDisconnect?.error, ', reconnexion :', shouldReconnect)
            if (shouldReconnect) {
                connectToWhatsApp()
            }
        } else if (connection === 'open') {
            console.log('✅ Connexion ouverte à WhatsApp')
        }
    })

    sock.ev.on('creds.update', saveCreds)
}

async function newRegister(num) {
    let inviteCode = ''
    let inviteLink = ''
    const groups = await sock.groupFetchAllParticipating()
    for (let key in groups) {
        if (groups[key].subject == "Créons Ensemble") {
            await sock.groupParticipantsUpdate(groups[key].id, [num], "add")
            inviteCode = await sock.groupInviteCode(groups[key].id)
            inviteLink = `https://chat.whatsapp.com/${inviteCode}`
        }
    }
    const buffer = fs.readFileSync("./src/logo.png")
    await sock.sendMessage(num, {
        image: buffer,
        caption: `Bonjour, bienvenue\n\n${inviteLink}`
    })
}

app.get('/', (req, res) => {
    res.sendFile(__dirname + '/index.html')
})

app.get('/qr', (req, res) => {
    if (qrCodeData) {
        res.send(`<img src="${qrCodeData}" alt="QR Code WhatsApp">`)
    } else {
        res.send('QR Code en attente...')
    }
})

app.get('/register', async (req, res) => {
    newRegister("243823617961@s.whatsapp.net")
    res.json({ response: 'good' })
})

app.listen(port, () => {
    console.log(`🚀 Serveur lancé sur http://localhost:${port}`)
})

connectToWhatsApp()