# Realtor Theme

### Requirements

`Realtor` requires the following plugins:
* AddToAny Share Buttons
* Advanced Custom Fields PRO
* Contact Form 7
* IMPress for IDX Broker
* Olly Olly Realtor Theme - Custom Posts Types
* Smush
* SVG Support
* Testimonial
* YITH Infinite Scrolling
* Yoast SEO

### Dev

Follow this steps to start writing code on this theme:
1. Install node modules and start gulp:
```bash
cd frontend
npm install
npm run start
```
2. Make changes on source code:
* For style changes go to frontend/scss and tackle the specific component.
- For editing a component:
	- Go to **frontend/es6/components**.
	- Do your magic on the specific component.

- For creating a new component:
	- Go to **frontend/es6/components**.
	- Create component\'s specific directory.
	- Build components logic inside its directory (you can follow another component\'s structure).
	- Export your component on **frontend/es6/components/index.js.**
	- Import your newly built component on **frontend/es6/script.js.**

3. **If** your gulp compiler is running (see step 1) your modificatios are already available so **start testing.**
4. Comit and push your changes.

## May the Force be with you!