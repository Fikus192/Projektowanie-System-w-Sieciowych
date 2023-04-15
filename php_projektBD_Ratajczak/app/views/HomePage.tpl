{extends file="main.tpl"}

{block name=content}











{block name=messages}

    {if $msgs->isMessage()}
        <div class="messages bottom-margin">
            <ul>
            {foreach $msgs->getMessages() as $msg}
            {strip}
                <li class="msg {if $msg->isError()}error bottom-margin{/if} {if $msg->isWarning()}info bottom-margin{/if} {if $msg->isInfo()}info bottom-margin{/if}">{$msg->text}</li>
            {/strip}
            {/foreach}
            </ul>
        </div>
    {/if}
            
{/block}
            
</div>
    
{/block}