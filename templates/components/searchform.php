<div class="searchform">
    <form method="get" id="searchform" class="form-inline" action="<?php echo esc_url(home_url('/')); ?>">
        <label for="s" class="sr-only"><?php _e('Pesquisar', 'nousk'); ?></label>
        <input type="text" class="form-control" name="s" id="s" placeholder="<?php esc_attr_e('Pesquisar', 'nousk'); ?>" />
        <button class="btn" type="submit" name="submit" id="searchsubmit" aria-label="Pesquisar">
            <i class="fas fa-search"></i>
        </button>
    </form>
</div>