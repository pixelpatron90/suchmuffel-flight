<?php include __DIR__ . '/layout/header-full.php'; ?>
<div class="w-9/12 sm:w-11/12" id="">
 <div class="flex justify-center items-center">
  <img class="h-48 sm:h-72" src="https://i.ibb.co/tdqhp22/1000190903.png" alt="suchmuffel" />
</div>
    <div class="bg-white mt-4 rounded-lg shadow-lg p-6 sm:p-8">
      <form action="https://www.google.com/search" method="get" class="flex flex-col gap-y-3">
        <input id="query" type="search" name="query" placeholder="Wonach suchst du diesmal, Faulpelz?" aria-label="Suchbegriff" required
               class="flex-1 px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400" />
        <button type="submit" class="px-5 py-3 bg-blue-600 text-white rounded-xl font-medium hover:bg-blue-700">
          Zaubersuche!
          </button>
      </form>
       <script>
    (function(){
      var input = document.getElementById('query');
      if(input) input.focus();
    })();
    </script>
    </div>
</div>
<?php include __DIR__ . '/layout/footer-full.php'; ?>
