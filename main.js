    $(document).ready(function(){
        $("#revString").click(function(){
            var string = $('#string').val();
            var revString = $('#revString').val();
            $.post("caseChange.php", {
                string: string,
                revString: revString
            },
            function(data){
                $("#string").val(data);
            });
        });
        $("#lowercaseBtn").click(function(){
            var string = $('#string').val();
            var lowercase = $('#lowercaseBtn').val();
            $.post("caseChange.php", {
                string: string,
                lowercase: lowercase
            },
            function(data){
                $("#string").val(data);
            });
        });
        $("#uppercaseBtn").click(function(){
            var string = $('#string').val();
            var uppercase = $('#uppercaseBtn').val();
            $.post("caseChange.php", {
                string: string,
                uppercase: uppercase
            },
            function(data){
                $("#string").val(data);
            });
        });
        $("#altcaseupperBtn").click(function(){
            var string = $('#string').val();
            var altcaseupper = $('#altcaseupperBtn').val();
            $.post("caseChange.php", {
                string: string,
                altcaseupper: altcaseupper
            },
            function(data){
                $("#string").val(data);
            });
        });
        $("#altcaselowBtn").click(function(){
            var string = $('#string').val();
            var altcaselow = $('#altcaselowBtn').val();
            $.post("caseChange.php", {
                string: string,
                altcaselow: altcaselow
            },
            function(data){
                $("#string").val(data);
            });
        });
        $("#CapitalizeBtn").click(function(){
            var string = $('#string').val();
            var capitalize = $('#CapitalizeBtn').val();
            $.post("caseChange.php", {
                string: string,
                capitalize: capitalize
            },
            function(data){
                $("#string").val(data);
            });
        });
        $("#copyCbd").click(function(){
            $("#string").select();
            document.execCommand('copy');
        });
        $("#string").keyup(function(){
            var string = $('#string').val();
            var count = $('#countString').val();
            $.post("caseChange.php", {
                string: string,
                count: count
            },
            function(data){
                $("#countString").html(data);
            });
        });
        $("#string").keyup(function(){
            var string = $('#string').val();
            var countWrd = $('#wordCount').val();
            $.post("caseChange.php", {
                string: string,
                countWrd: countWrd
            },
            function(data){
                $("#wordCount").html(data);
            });
        });
        $("#string").keyup(function(){
            var string = $('#string').val();
            var countLine = $('#lineCount').val();
            $.post("caseChange.php", {
                string: string,
                countLine: countLine
            },
            function(data){
                $("#lineCount").html(data);
            });
        });
        $("#clear").click(function(){
           
            $("#string").val("");
        });
    });