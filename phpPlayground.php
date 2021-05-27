<div
  class="laravel-playground"
  data-theme="dark"
  data-filename="index.php"
  data-hide-result="true"
>
  <pre data-filename="index.php">
&lt;?php
echo "Hello World";
?&gt;</pre
  >
  <pre data-filename="playground.blade.php">
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Laravel Playground&lt;/title&gt;
        &lt;link rel=&quot;stylesheet&quot;  href=&quot;https://beyondco.de/css/default.css&quot;&gt;
    &lt;/head&gt;
    &lt;body
        style=&quot;background: url(&#39;https://beyondco.de/img/monotone_software.png&#39;) top right no-repeat;
        background-size: 100% 1200px;
        background-position-x: calc(100% + 0px);
        background-position-y: -140px;
    &quot;&gt;
        &lt;div class=&quot;container px-4 md:px-8 mx-auto pt-4 flex flex-col&quot;&gt;
            &lt;header class=&quot;pt-4 text-dark-blue-800 pb-6&quot;&gt;
                &lt;a href=&quot;https://beyondco.de&quot; class=&quot;inline-flex items-center&quot;&gt;
                    &lt;svg width=&quot;40&quot; height=&quot;45&quot; viewBox=&quot;0 0 40 45&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
                        &lt;path d=&quot;M14.1169 3.30926C17.7698 1.25447 22.2302 1.25447 25.8831 3.30926L33.8831 7.80926C37.6617 9.93468 40 13.9329 40 18.2682V26.7318C40 31.0671 37.6617 35.0653 33.8831 37.1907L25.8831 41.6907C22.2302 43.7455 17.7698 43.7455 14.1169 41.6907L6.11686 37.1907C2.33834 35.0653 0 31.0671 0 26.7318V18.2682C0 13.9329 2.33834 9.93468 6.11687 7.80926L14.1169 3.30926Z&quot; fill=&quot;#0A214C&quot;/&gt;
                        &lt;g clip-path=&quot;url(#clip0)&quot;&gt;
                            &lt;path fill-rule=&quot;evenodd&quot; clip-rule=&quot;evenodd&quot; d=&quot;M10.706 13.1211C11.2556 13.1211 11.7013 13.5597 11.7013 14.1008V20.7794C12.8332 19.7296 14.3561 19.0842 16.0304 19.0842C17.7282 19.0842 19.3328 19.7481 20.5159 20.9226C20.6518 21.0576 20.6827 21.1015 20.8072 21.2497C20.1107 22.0722 19.8121 23.1499 19.8121 23.1499C19.5138 22.758 19.2141 22.4172 19.2141 22.4172C18.3945 21.5414 17.2471 21.0437 16.0304 21.0437C13.6433 21.0437 11.7013 22.9553 11.7013 25.3051C11.7013 27.655 13.6433 29.5669 16.0304 29.5669C18.4175 29.5669 20.3598 27.655 20.3598 25.3051C20.3598 21.8749 23.1945 19.0842 26.6792 19.0842C27.7904 19.0842 28.8834 19.3724 29.8402 19.9175C30.3159 20.1882 30.4784 20.7876 30.2033 21.2559C29.9277 21.7242 29.3189 21.8844 28.8434 21.6131C28.1892 21.2405 27.4409 21.0437 26.6792 21.0437C24.2923 21.0437 22.3501 22.9553 22.3501 25.3051C22.3501 28.7353 19.515 31.5261 16.0304 31.5261C12.5457 31.5261 9.71094 28.7353 9.71094 25.3051L9.71246 25.2399C9.71195 25.2289 9.71094 25.2182 9.71094 25.2072V14.1008C9.71094 13.5597 10.1563 13.1211 10.706 13.1211ZM22.8974 27.4604C23.2955 28.0483 23.7029 28.4 23.7358 28.4304C24.5388 29.1643 25.5789 29.5669 26.6792 29.5669C27.4409 29.5669 28.1892 29.3698 28.8434 28.9972C29.3189 28.7264 29.9277 28.8861 30.2033 29.3544C30.4784 29.8227 30.3159 30.4221 29.8402 30.6931C28.8834 31.2381 27.7904 31.5261 26.6792 31.5261C25.0439 31.5261 23.5 30.917 22.3197 29.8087C22.2929 29.7838 21.9285 29.4453 21.9022 29.4199C21.9022 29.4199 22.6983 28.2441 22.8974 27.4604Z&quot; fill=&quot;white&quot;/&gt;
                        &lt;/g&gt;
                        &lt;defs&gt;
                            &lt;clipPath id=&quot;clip0&quot;&gt;
                                &lt;rect x=&quot;9.28516&quot; y=&quot;12.6565&quot; width=&quot;21.4286&quot; height=&quot;19.0848&quot; fill=&quot;white&quot;/&gt;
                            &lt;/clipPath&gt;
                        &lt;/defs&gt;
                    &lt;/svg&gt;
                    &lt;p class=&quot;ml-4 font-headline text-lg&quot;&gt;&lt;span class=&quot;text-hulk-800&quot;&gt;Laravel Playground&lt;/span&gt; - a Beyond&lt;span class=&quot;text-hulk-800&quot;&gt;Code&lt;/span&gt; product&lt;/p&gt;
                &lt;/a&gt;
            &lt;/header&gt;
            &lt;div class=&quot;text-dark-blue-800 text-xl pt-4&quot;&gt;
                &lt;h1 class=&quot;text-2xl font-bold&quot;&gt;Welcome to {{ $title }}&lt;/h1&gt;
                &lt;p class=&quot;pt-2 text-base&quot;&gt;
                    To learn more about the things you can do, take a look at the &lt;a href=&quot;https://beyondco.de/docs/laravel-playground&quot; class=&quot;underline&quot; target=&quot;_blank&quot;&gt;official documentation&lt;/a&gt;.
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
    &lt;/html&gt;
    
    </pre
  >
</div>

<script
  type="text/javascript"
  src="https://embed.laravelplayground.com"
></script>
