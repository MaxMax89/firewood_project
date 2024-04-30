<?include 'data/data.site.php'?>
<section class="firewood_block">
    <div class="firewood_title">
        <h2>Дрова в асортименте</h2>
    </div>
    <div class="firewood_content">
        <div class="firewood_product">
            <?foreach ($firewood as $product):?>
            <div class="firewood_product_card">
                <div class="firewood_product_card_img"></div>
            </div>
            <?endforeach;?>
        </div>
    </div>
</section>
