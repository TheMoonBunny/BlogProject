
<?php
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
Artisan::command('generate:feed', function () {
  $this->info("Generating RSS Feed");
  // It is important that you sort by the latest post
  $posts = Post::where('published', true)->latest()->get();
  $site = [
    'name' => 'HowToComputerLife', // Simplest Web
    'url' => 'public/rss.xml', // Link to your rss.xml. eg. https://simplestweb.in/rss.xml
    'description' => 'Blog website for computer',
    'language' => 'en', // eg. en, en-IN, jp
    'lastBuildDate' => $posts[0]->created_at->format(DateTime::RSS), // This generates the latest posts date in RSS compatible format
  ];
  // Passes posts and site data into the rss.blade.view, out comes text in rss format
  $rssFileContents = view('rss', compact('posts', 'site'));
  // Saves the generated rss feed into a file called rss.xml in the public folder, this works only
  Storage::disk('local')->put('rss.xml', $rssFileContents);
  $this->info("Completed");
});