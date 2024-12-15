import './bootstrap';

import Alpine from 'alpinejs';
import axios from 'axios';


window.Alpine = Alpine;

Alpine.start();

//Processing static assets
import.meta.glob([
    '../images/**',
    '../fonts/**',
  ])