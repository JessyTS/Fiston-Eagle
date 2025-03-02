/**
 * Fonction pour verifier une adresse dans une zone de texte ou une chaine de caractère
 * @param {string} email L'adresse mail que vous souhaitez verifier
 * @returns {boolean} true si l'adresse est valide et false dans d'autres cas
 */
export function checkEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    return regex.test(email)
}

/**
 * Fonction pour bloquer les espaces dans une zone de texte ou une chaine de caractère
 * @param {string} input La chaine de caratère que vous souhaitez parser
 * @returns {string} Renvoie la chaine sans les espaces
 */
export function removeSpace(input) {
    return input.replace(/\s/g, '')
}

export function clearString(input) {
    let lettersOnly = input.replace(/[^a-zA-Z]/g, "").toLowerCase()
    if (lettersOnly.length > 0) {
        lettersOnly = lettersOnly[0].toUpperCase() + lettersOnly.slice(1)
    }
    return lettersOnly
}

export function clearNumber(input) {
    return input.replace(/(?!^\+)[^0-9]/g, "")
}

export function checkNumber(number) {
    const cleanedNumber = clearNumber(number)
    return /^\+243\d{9}$/.test(cleanedNumber)
}
