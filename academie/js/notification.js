export function createNotification(type, description) {
    const container = document.querySelector('.notification-container')
    const notification = document.createElement('div')
    notification.classList.add('notification', type)
    let iconClass
    switch (type) {
        case 'success':
            iconClass = 'fa-check-circle'
            break;
        case 'error':
            iconClass = 'fa-times-circle'
            break;
        case 'warning':
            iconClass = 'fa-exclamation-triangle'
            break;
        case 'info':
            iconClass = 'fa-info-circle'
            break;
        default:
            iconClass = 'fa-info-circle'
    }
    notification.innerHTML = `
        <button class="notification-close">&times;</button>
        <div class="notification-content">
            <div class="notification-icon">
                <i class="fas ${iconClass}"></i>
            </div>
            <div class="notification-message">
                <div class="notification-description">${description}</div>
            </div>
        </div>
    `
    const closeButton = notification.querySelector('.notification-close')
    closeButton.addEventListener('click', () => {
        notification.classList.remove('slide-in')
        notification.classList.add('slide-out')
        setTimeout(() => {
            notification.remove()
        }, 300)
    })
    container.prepend(notification)
    setTimeout(() => {
        notification.classList.add('slide-in')
    }, 50)
    setTimeout(() => {
        notification.classList.remove('slide-in')
        notification.classList.add('slide-out')
        setTimeout(() => {
            notification.remove()
        }, 300)
    }, 5000)
}