import { checkEmail, checkNumber, clearNumber, clearString, removeSpace } from "./function.js"
import { createNotification } from "./notification.js"

const form = document.querySelector('form')
const firstname = form[10]
const lastname = form[11]
const phone = form[12]
const email = form[13]
const domaine = form[14]
const niveau = form[15]
const submit = form[16]

firstname.addEventListener('input', (event) => firstname.value = clearString(firstname.value.trim()))
lastname.addEventListener('input', (event) => lastname.value = clearString(lastname.value.trim()))
phone.addEventListener('input', (event) => phone.value = clearNumber(phone.value.trim()))
email.addEventListener('input', (event) => email.value = removeSpace(email.value.trim().toLowerCase()))

form.addEventListener('submit', (event) => {
    event.preventDefault()
    if (!checkNumber(phone.value.trim())) {
        createNotification('error', `Veuillez un numero de téléphone valide (+24389XXXXXXX), nous vous conseillons de prendre votre numéro whatsapp.`)
        return
    }
    if (!checkEmail(email.value.trim())) {
        createNotification('error', `Adresse e-mail invalide.`)
        return
    }
    const reference = `UG${Math.floor(Math.random() * 1000)}TS${Math.floor(Math.random() * 1000)}A`
    const ID = form.elements['MerchantID']
    const Pass = form.elements['MerchantPassword']
    const Ref = form.elements['Reference']
    const Amount = form.elements['Amount']
    const Accept = form.elements['accepturl']
    const Decline = form.elements['declineurl']
    const Cancel = form.elements['cancelurl']

    ID.value = `a88fb7d9722541dd8acc4a48bc688741`
    Pass.value = `93cdf9060532491ea2b05c0a75b4bd1b`
    Ref.value = `${reference}`
    Amount.value = 5 * 100
    Accept.value = `${window.location.protocol}//${window.location.host}/php/private/return/sendData.php/?phone=${phone.value.trim()}`
    Decline.value = `${window.location.protocol}//${window.location.host}/`
    Cancel.value = `${window.location.protocol}//${window.location.host}/`

    const requete = {
        firstname: firstname.value.trim(),
        lastname: lastname.value.trim(),
        phone: phone.value.trim(),
        email: email.value.trim(),
        domaine: domaine.value,
        niveau: niveau.value,
        reference: reference
    }

    const xhr = new XMLHttpRequest()
    xhr.open('POST', `${window.location.protocol}//${window.location.host}/php/private/register/sendData.php`)
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
    xhr.onload = () => {
        if (xhr.status === 200) {
            let response = JSON.parse(xhr.response).response
            if (response == 'good') {
                form.submit()
            } else {
                createNotification('error', `Erreur inconnue veuillez actualiser la page.`)
            }
        }
    }
    xhr.send(`action=register&data=${JSON.stringify(requete)}`)
})

console.log(form)