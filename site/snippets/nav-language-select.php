<nav class="languages" role="navigation">
  <ul class="navbar-nav">
    <?php foreach($site->languages() as $language): ?>
    <li class="nav-item <?php e($site->language() == $language, 'active') ?>">
      <a href="<?= $page->url($language->code()) ?>" class="nav-link">
        <?= html($language->name()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>