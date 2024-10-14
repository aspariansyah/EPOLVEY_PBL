import '../../bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';
import { createInertiaApp } from '@inertiajs/inertia-react';
import { render } from 'react-dom';

createInertiaApp({
    resolve: name => import(`./Pages/${name}`),
    setup({ el, App, props }) {
        render(<App {...props} />, el);
    }
});
