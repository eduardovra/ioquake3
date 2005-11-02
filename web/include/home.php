<p>Quake 3 runs natively on everything, thanks to <a href="http://www.idsoftware.com/">ID Software</a> for releasing the
	game source.</p>

	<p class="angryzakk">Open-Source Quake 3 does not entitle you to steal, warez, 
	pie-rat, or borrow Quake 3/Team Arena data. Do not file bugs or show your face in
	the <acronym title="Internet Relay Chat">IRC</acronym> channel if you've acquired
	the game data illegally!</p>
	<p><img src="images/quake3.jpg" alt="Quake3 Screenshot" class="right"/></p>


	<h2>What works:</h2>
	<ul>
		<li>Everything.</li>
		<li>x86_64 support (including movies, native and interpreted vm mods!)</li>
		<li>PowerPC, we think.</li>
		<li><a href="http://www.libsdl.org/" title="Simple DirectMedia Layer">SDL</a> input, joysticks, window handling, etc.</li>
		<li><a href="http://www.libsdl.org/" title="Simple DirectMedia Layer">SDL</a> sound, so <a href="http://alsa-project.org" title="Advanced Linux Sound Architecture">ALSA</a> should work now.</li>
		<li>Win32 compiles and runs fine with current <acronym title="Subversion">SVN</acronym>.</li>
		<li>mingw support.</li>
		<li>FreeBSD</li>
	</ul>

	<h2>What doesn't work/known bugs:</h2>
	<ul>
		<li>World of Warcraft client.</li>
		<li>Nobody has actually written the <a href="http://www.openal.org/">OpenAL</a> juju yet.</li>
		<li>Nobody has made any optional graphics upgrades yet.</li>
		<li>Nobody has ported this thing to the PSP yet.</li>
		<li>Punkbuster, never will work unless even balance makes it so.</li>
		</ul>
	<h2>What's the point?</h2>
	<ul>
		<li>No random patches to make the mynx model naked, etc.</li>
		<li>No patches to change the gameplay. Make a mod, not an engine change.</li>
		<li>No patches to remove the cdkey check from anything that requires the
		Quake 3 data (<span class="shell">pak0.pk3</span> from the cd, team arena,
		mods that use Quake 3 maps/textures/models/etc.)</li>
		<li>Security fixes.</li>
		<li>Bug fixes.</li>
		<li>New architectures (x86-64, AmigaOS, BeOS, DOS, PSP, whatever.)</li>
		<li><a href="http://www.openal.org/">OpenAL</a> (for better support of
		<a href="http://alsa-project.org" title="Advanced Linux Sound Architecture">ALSA</a>
		and such) at some point</li>
		<li>Entirely optional, and disabled by default, graphics upgrades. We love
		bloom lighting and such, but please make sure they're disabled by default
		(at the compilation level), and when enabled still need to be ticked on in
		the menus.</li>
		<li>Ditto for sound.</li>
		<li>Mod support.</li>
		<li>Hopefully we'll get a pack of bare-bones data files to test that the
		engine works, too.</li>
	</ul>

	<h2>To use:</h2>
	<ul>
		<li>Make sure you've got a Quake 3 CD-ROM. You might be able to get away
		with the shareware version or one of the other retail versions, but I haven't
		tried. The Quake 3 source release does not obviate the need for a legitimate
		copy of Quake 3.</li>
		<li>If you're using Gentoo, just <span class="shell">emerge quake3</span>,
		you'll get a semi-recent build.</li>
		<li>Get the source code from <acronym title="Subversion">SVN</acronym>:</li>
		<li class="shell">svn co svn://svn.icculus.org/quake3/trunk quake3</li>
		<li><a href="http://svn.icculus.org/*checkout*/quake3/trunk/i_o-q3-readme">
		Read the README.</a></li>
		<li>Compile.</li>
		<li>Copy your <span class="shell">pak0.pk3</span> off your legitimate Quake 3 CD-ROM, and we will also
		need the pk3s from the latest id patch (
		<a href="http://filesingularity.timedoctor.org/linuxq3apoint-1.32b-3.x86.run">linux</a>
		/<a href="http://filesingularity.timedoctor.org/q3pointrelease_132.exe">win32</a>
		/<a href="http://filesingularity.timedoctor.org/Quake3-132.pkg.sit">mac</a>).</li>
		<li>Run game, be happy.</li>
		<li>Touch the penguin.</li>
		<li>Clap your hands!</li>
		<li>Feature requests, bug reports, and preferably patches go to the
		<a href="http://bugzilla.icculus.org/">bugzilla</a> AND give the bugzilla
		url or bug # for your bug in the mailing list.</li>
		<li>Subscribe to the mailing list:
		<a href="mailto:quake3-subscribe@icculus.org">quake3-subscribe@icculus.org</a></li>
		<li>patches go to <a href="mailto:zakk@icculus.org">zakk@icculus.org</a>
		if you're not interested in bugzilla.</li>
		<li>Please do not send patches that aren't yours without the approval of
		the actual patch author.</li>
		<li>Web view of the SVN: <a href="http://svn.icculus.org/quake3/trunk/">
		http://svn.icculus.org/quake3/trunk/</a></li>
		<li>Buy id software's other games.</li>
		<li>Donate everything else to charity.</li>
		<li>Stop by <em>#icculus.org/quake3</em> on <em>irc.freenode.net</em></li>
	</ul>

	<h1>If you have problems:</h1>
	<p>
		Submit everything to the <a href="http://bugzilla.icculus.org/">bugzilla</a>.
		Do NOT contact us for copies of the game.
		Otherwise, if you aren't sending us patches, or good feedback, don't contact us at all.
	</p>
