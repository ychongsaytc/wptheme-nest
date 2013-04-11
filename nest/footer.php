<?php global $nest_options; ?>

			<div class="clearfix"></div>

		</div><!-- #content -->

	</div><!-- #main -->

	<div id="footer">
		<footer id="footer-inner" class="inner">
			<span class="copyright"><?php if( ! empty( $nest_options['code_siteinfo'] ) ) : echo html_entity_decode( $nest_options['code_siteinfo'] ); else : ?>&copy; <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>.<?php endif ?></span>
			<span class="poweredby">
				<?php _e( 'Proudly Powered by <a href="http://wordpress.org/">WordPress</a> | Nest Theme by <a href="http://www.ychong.com/" title="designed by YChong">YChong</a>', 'nest' ); ?>
			</span>
			<div class="clearfix"></div>
		</footer><!-- #footer-inner -->
	</div><!-- #footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
