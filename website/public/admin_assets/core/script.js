$(document).on('keyup', 'slug-generate', function () {
    const slugGenerate = adminBase.helpers.autoGenSlug($(this).val());
    $('slug-received').val(slugGenerate);
});
