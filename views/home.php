<?php include __DIR__ . '/layout/header.php'; ?>
<div class="w-8/12 sm:w-10/12" id="">
  <img src="https://i.ibb.co/tdqhp22/1000190903.png" />
    <div class="bg-white mt-4 rounded-lg shadow-lg p-6 sm:p-8">
      <form action="#" method="get" class="flex flex-col gap-y-3">
        <input type="search" name="q" placeholder="Suchbegriff..." aria-label="Suchbegriff"
               class="flex-1 px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400" />
        <button type="submit" class="px-5 py-3 bg-blue-600 text-white rounded-xl font-medium hover:bg-blue-700">Suchen</button>
      </form>
    </div>
</div>
<?php include __DIR__ . '/layout/footer.php'; ?>
