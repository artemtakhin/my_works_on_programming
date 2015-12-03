<div id="sidebar">
  <?php if(!dynamic_sidebar("sidebar")) : ?>
    <div id="widget">
      <h1>Категории</h1>
      <ul>
        <?php wp_list_categories(array('title_li' => '')); ?>
      </ul>
    </div>
  <?php endif; ?>
                    <!--<div id="widget">
                         <h1>Категории</h1>
                         <ul id="category">
                              <a href="#"><li>Текст1</li></a>
                              <a href="#"><li>Текст2</li></a>
                              <a href="#"><li>Текст3</li></a>
                              <a href="#"><li>Текст4</li></a>
                          </ul>
                    </div>-->
  </div>