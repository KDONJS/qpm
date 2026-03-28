/**
 * Control de pestañas en la página de contacto
 * QPM Servicios Técnicos
 */

(function() {
    'use strict';

    const TabController = {
        init() {
            this.tabButtons = document.querySelectorAll('.tab-button');
            this.bindEvents();
        },

        bindEvents() {
            this.tabButtons.forEach(button => {
                button.addEventListener('click', (e) => this.handleTabClick(e));
            });
        },

        handleTabClick(event) {
            const button = event.currentTarget;
            const tabName = button.dataset.tab;
            
            if (!tabName) return;
            
            this.hideAllTabs();
            this.deactivateAllButtons();
            this.showTab(tabName);
            this.activateButton(button);
        },

        hideAllTabs() {
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => content.classList.remove('active'));
        },

        deactivateAllButtons() {
            this.tabButtons.forEach(button => button.classList.remove('active'));
        },

        showTab(tabName) {
            const tabContent = document.getElementById(tabName + '-tab');
            if (tabContent) {
                tabContent.classList.add('active');
            }
        },

        activateButton(button) {
            button.classList.add('active');
        }
    };

    // Inicializar cuando el DOM esté listo
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => TabController.init());
    } else {
        TabController.init();
    }
})();
