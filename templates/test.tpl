{config_load file='configure.config'}

{include file="header.tpl" title='Info'}

{* config file variables *}
<h1>{#variable#}</h1>
<h2>{$smarty.config.variable}</h2>

<pre>
    Name: {$name|capitalize}
    Address: {$address|escape}
    Date: {$smarty.now|date_format: "%b %e, %Y"}
    </pre>

{* arrays START*}
<select>
    {html_options values=$id output=$names selected="4"}
</select>

{* foreach loop*}
{foreach $names as $name}
    <h3>{$name}</h3>
{/foreach}

{foreach $users as $user}
    {strip}
        name: {$user.name} - Phone: {$user.phone}
    {/strip}

{/foreach}

{* Section loop *}
{section name=loopindex loop=$names}
    <li>{$names[loopindex]}</li>
{/section}

{foreach $users as $user}

    {strip}
        <pre>
        <li>{$user.name}-{$user.phone}</li> 
        </pre>
    {/strip}
{/foreach}


<p>{json_encode($users)}</p>


{* arrays END*}

{* links *}
<a href="{$smarty.server.SCRIPT_NAME}?page=smarty">Click here to go to smarty page</a>

{* smarty consts *}
<h1>{$smarty.const.smarty_const}</h1>

<h1>current dir: {$smarty.current_dir}<h1>



        <pre>
    {* smarty modifiers *}
        address: {$address|cat: ' concat this string'}
        char count: {$address|count_characters}
        word count: {$address|count_words}
        Date: {$smarty.now|date_format: "%Y-%m-%d"}
        default: {$address|default:"(none)"}
        escape: {$address|escape}

        {* Combining Modifiers *}
        {strip}
                Combining Modifiers: {$address|upper|spacify}
        {/strip}

        {* Builtin functions *}
        {strip}
                {append var='appendname' value='fname' index='first'}
                {append var='appendname' value='lname' index='last'}
                The first name is {$appendname.first}.
                The last name is {$appendname.last}.

                        <ul>
                    {for $foo=1 to 3}
                                <li>{$foo}</li>
                    {/for}
                </ul>

                <ul>
        {for $foo=$start to $to}
                <li>{$foo}</li>
            {forelse}
              no iteration
        {/for}
    </ul>

    <ul>
    {foreach $myColors as $color}
        <li>{$color}</li>
    {/foreach}
</ul>
    {/strip}

    {if $name eq 'rajat sachan'}
        access granted
    
    {else}
        access denied

        {/if}


        {* custom functions *}

        {counter start=0 skip=2}<br />
        {counter}<br />
        {counter}<br />
        {counter}<br />

        {* {fetch file='https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515358_10512.png'} *}

        {html_checkboxes name='id' values=$cust_ids output=$cust_names seperator='<br/>'}

        {html_image file='https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515358_10512.png'}

        {* date and time select *}
        {strip}
        {html_select_date}
        {/strip}

        {html_select_time use_24_hours=true}



    </pre>






{include file='footer.tpl'}