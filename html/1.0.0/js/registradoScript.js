"use strict";

import {
	lazyLoadVideos
} from './lazyVideos.js'
import {
	utmAnchorPropagation
} from './modules/utm.js';
document.addEventListener('DOMContentLoaded', () => {
	lazyLoadVideos();
	utmAnchorPropagation();
})