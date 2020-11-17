$(document).on('keyup', 'slug-generate', function () {
    const slugGenerate = adminBase.helpers.autoGenSlug($(this).val());
    $('slug-received').val(slugGenerate);
});

$(document).on('keyup', 'en-slug-generate', function () {
    const slugGenerate = adminBase.helpers.autoGenSlug($(this).val());
    $('en-slug-received').val(slugGenerate);
});
