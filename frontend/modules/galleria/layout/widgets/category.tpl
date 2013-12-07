{*
  variables that are available:
  - {$widgetCategory}: contains all the data for this widget
*}

{option:widgetCategory}
    <ul class="galleria-category">
    {iteration:widgetCategory}
        <li>
            <a href="{$widgetCategory.full_url}"><img src="{$widgetCategory..image.image_128x128}" alt="{$widgetCategory.title}" title="{$widgetCategory.title}"></a>
        </li>
    {/iteration:widgetCategory}
    </ul>
    <div class="clear">&nbsp;</div>
{/option:widgetCategory}
