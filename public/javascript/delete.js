$(function() {


    document.querySelector(".delete").addEventListener('click', function() {
        Swal.fire({
            title: 'تأكيد الحذف',
            text: "سوف تتم عملية الحذف هل انت متأكد؟",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'إلغاء',
            confirmButtonText: 'تأكيد'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'تم الحذف',
                    'تم الحذف بنجاح',
                    'success'
                )
            }
        })
    });
});