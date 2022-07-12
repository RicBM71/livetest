import './bootstrap';

import Alpine from 'alpinejs';
import Pikaday from 'pikaday';
import { livewire_hot_reload } from 'virtual:livewire-hot-reload';

livewire_hot_reload();

window.Alpine = Alpine;
window.Pikaday = Pikaday;

Alpine.start();
