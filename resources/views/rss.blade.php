
{!! '<'.'?'.'xml version="1.0" encoding="UTF-8" ?>' !!}
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:media="http://search.yahoo.com/mrss/">
  <channel>
    <title>{{ $site['name'] }}</title>
    <link>{{ $site['url'] }}</link>
    <description><![CDATA[{{ $site['description'] }}]]></description>
    <atom:link href="{{ $site['url'] }}" rel="self" type="application/rss+xml" />
    <language>{{ $site['language'] }}</language>
    <lastBuildDate>{{ $site['lastBuildDate'] }}</lastBuildDate>
    @foreach($posts as $post)
    <item>
      <title><![CDATA[{!! $post->title !!}]]></title>
      <link>{{ route('pages.post', $post->slug) }}</link>
      <guid isPermaLink="true">{{ route('pages.post', $post->slug) }}</guid>
      <description><![CDATA[{!! $post->description !!}]]></description>
      <content:encoded><![CDATA[{!! $post->content !!}]]></content:encoded>
      <dc:creator xmlns:dc="http://purl.org/dc/elements/1.1/">{{ $post->author }}</dc:creator>
      <pubDate>{{ $post->created_at->format(DateTime::RSS) }}</pubDate>
    </item>
    @endforeach
  </channel>
</rss>