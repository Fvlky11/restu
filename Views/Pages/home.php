<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<main class="container">
  <div class="p-4 p-md-5" style="margin-top: -30px; margin-bottom: 10px; border-radius: .375rem; background-color: #black;">
    <div class="col-lg-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead" style="margin-top: 10px; margin-bottom: 10px;">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead" style="margin-bottom: 10px;"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row" style="margin-top: 10px; margin-bottom: 10px;">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative" style="margin-top: 10px;">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block" style="margin-bottom: 10px; color: #0d6efd;">World</strong>
          <h3 style="margin-bottom: 10px;">Featured post</h3>
          <div class="text-body-secondary" style="margin-bottom: 10px;">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative" style="margin-top: 10px;">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block" style="margin-bottom: 10px; color: #198754;">Design</strong>
          <h3 style="margin-bottom: 10px;">Post title</h3>
          <div class="text-body-secondary" style="margin-bottom: 10px;">Nov 11</div>
          <p style="margin-bottom: 10px;">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
  </div>
</main>

<?= $this-> endSection(); ?>