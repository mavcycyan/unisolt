<?php

namespace classes;

class UnisoltConfigurator
{

    private $data;
    function __constructor() {

    }

    public function init() {
        return 'Hello';
    }

    public function scripts_init() {
        ob_start();?>

        <script>
            var steps = {
                step0: [
                    {chosen: ''},
                    {current: true}
                ],
                step1: [
                    {chosen: ''},
                    {current: false}
                ],
                step2: [
                    {chosen: ''},
                    {current: false}
                ],
                step3: [
                    {chosen: ''},
                    {current: false}
                ],
                step4: [
                    {chosen: ''},
                    {current: false}
                ]
            };

            var app = null;

            document.ready = function() {
                app = document.querySelector('#app');

                var xhr = new XMLHttpRequest();
                xhr.open('POST', '<?php echo admin_url('admin-ajax.php'); ?>');
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var data =xhr.responseText;
                        document.querySelector('.js-estWrap').innerHTML = data;
                        paginatorGenerate()
                    } else {
                        console.error('Request failed. Returned status code ' + xhr.status);
                    }
                };
                xhr.send(data);
            };
        </script>

        <?php return ob_get_clean();
    }
}