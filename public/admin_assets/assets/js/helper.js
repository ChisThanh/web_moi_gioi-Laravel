function notifyError(message = '') {
    $.toast({
        heading: 'ERROR',
        text: message,
        showHideTransition: 'slide',
        position: 'bottom-right',
        icon: 'error'
    })
}

function notifySuccess(message = '') {
    $.toast({
        heading: 'Success',
        text: message,
        showHideTransition: 'slide',
        position: 'bottom-right',
        icon: 'success'
    })
}
