const products = {
    men: {
      tShirts: [
        { id: 1, name: "Premium Non-Iron Stretch Slim Fit T-Shirt", price: 49.99, image: "../Pictures/Men/t-shirts/tshirt (1).jpg" },
        { id: 2, name: "Graphic Print Tee", price: 24.99, image: "../Pictures/Men/t-shirts/tshirt (2).jpg" },
        { id: 3, name: "Basic Crew Neck T-Shirt", price: 19.99, image: "../Pictures/Men/t-shirts/tshirt (3).jpg" },
        { id: 4, name: "Striped Casual Tee", price: 22.99, image: "../Pictures/Men/t-shirts/tshirt (4).jpg" },
        { id: 5, name: "V-Neck Cotton T-Shirt", price: 21.99, image: "../Pictures/Men/t-shirts/tshirt (5).jpg" },
        { id: 6, name: "Long Sleeve T-Shirt", price: 29.99, image: "../Pictures/Men/t-shirts/tshirt (6).jpg" },
        { id: 7, name: "Oversized Graphic T-Shirt", price: 34.99, image: "../Pictures/Men/t-shirts/tshirt (7).jpg" },
        { id: 8, name: "Performance Fit Tee", price: 39.99, image: "../Pictures/Men/t-shirts/tshirt (8).jpg" },
        { id: 9, name: "Polo T-Shirt", price: 27.99, image: "../Pictures/Men/t-shirts/tshirt (9).jpg" },
        { id: 10, name: "Tie-Dye T-Shirt", price: 26.99, image: "../Pictures/Men/t-shirts/tshirt (10).jpg" }
      ],
      shirts: [
        { id: 1, name: "Lite Green Printed Half Sleeve Hawaiian Shirt", price: 29.99, image: "../Pictures/Men/Shirts/shirt (1).jpg" },
        { id: 2, name: "Classic White Oxford Shirt", price: 34.99, image: "../Pictures/Men/Shirts/shirt (2).jpg" },
        { id: 3, name: "Slim Fit Denim Shirt", price: 39.99, image: "../Pictures/Men/Shirts/shirt (3).jpg" },
        { id: 4, name: "Checkered Button-Down Shirt", price: 25.99, image: "../Pictures/Men/Shirts/shirt (4).jpg" },
        { id: 5, name: "Casual Short Sleeve Shirt", price: 22.99, image: "../Pictures/Men/Shirts/shirt (5).jpg" },
        { id: 6, name: "Plaid Flannel Shirt", price: 32.99, image: "../Pictures/Men/Shirts/shirt (6).jpg" },
        { id: 7, name: "Long Sleeve Dress Shirt", price: 44.99, image: "../Pictures/Men/Shirts/shirt (7).jpg" },
        { id: 8, name: "Hawaiian Beach Shirt", price: 28.99, image: "../Pictures/Men/Shirts/shirt (8).jpg" },
        { id: 9, name: "Tropical Print Button-Up Shirt", price: 33.99, image: "../Pictures/Men/Shirts/shirt (9).jpg" },
        { id: 10, name: "Camo Print Shirt", price: 27.99, image: "../Pictures/Men/Shirts/shirt (10).jpg" },
        { id: 11, name: "Lightweight Linen Shirt", price: 36.99, image: "../Pictures/Men/Shirts/shirt (11).jpg" },
        { id: 12, name: "Button-Up Chino Shirt", price: 31.99, image: "../Pictures/Men/Shirts/shirt (12).jpg" },
        { id: 13, name: "Vintage Floral Print Shirt", price: 38.99, image: "../Pictures/Men/Shirts/shirt (13).jpg" }
      ],
      jackets: [
        { id: 1, name: "Men's Casual Jacket", price: 59.99, image: "../Pictures/Men/jackets/jacket (1).jpeg" },
        { id: 2, name: "Leather Bomber Jacket", price: 89.99, image: "../Pictures/Men/jackets/jacket (2).jpeg" },
        { id: 3, name: "Denim Jacket", price: 49.99, image: "../Pictures/Men/jackets/jacket (3).jpg" },
        { id: 4, name: "Varsity Jacket", price: 69.99, image: "../Pictures/Men/jackets/jacket (4).jpg" },
        { id: 5, name: "Puffer Jacket", price: 99.99, image: "../Pictures/Men/jackets/jacket (5).jpg" },
        { id: 6, name: "Hooded Parka Jacket", price: 79.99, image: "../Pictures/Men/jackets/jacket (6).jpg" },
        { id: 7, name: "Fleece Zip-Up Jacket", price: 39.99, image: "../Pictures/Men/jackets/jacket (7).jpg" },
        { id: 8, name: "Military Tactical Jacket", price: 89.99, image: "../Pictures/Men/jackets/jacket (8).jpg" }
      ],
      pants: [
        { id: 1, name: "Men's Casual Pants", price: 59.99, image: "../Pictures/Men/pants/pant (1).jpg" },
        { id: 2, name: "Slim Fit Chinos", price: 49.99, image: "../Pictures/Men/pants/pant (2).jpg" },
        { id: 3, name: "Slim Fit Jeans", price: 59.99, image: "../Pictures/Men/pants/pant (3).jpg" },
        { id: 4, name: "Cargo Pants", price: 44.99, image: "../Pictures/Men/pants/pant (4).jpg" },
        { id: 5, name: "Straight Leg Denim", price: 49.99, image: "../Pictures/Men/pants/pant (5).jpg" },
        { id: 6, name: "Jogger Pants", price: 39.99, image: "../Pictures/Men/pants/pant (6).jpg" },
        { id: 7, name: "Linen Summer Pants", price: 29.99, image: "../Pictures/Men/pants/pant (7).jpg" },
        { id: 8, name: "Tapered Fit Trousers", price: 59.99, image: "../Pictures/Men/pants/pant (8).jpg" },
        { id: 9, name: "Relaxed Fit Khakis", price: 34.99, image: "../Pictures/Men/pants/pant (9).jpg" },
        { id: 10, name: "Cuffed Sweatpants", price: 27.99, image: "../Pictures/Men/pants/pant (10).jpg" },
        { id: 11, name: "Chino Pants", price: 39.99, image: "../Pictures/Men/pants/pant (11).jpg" }
      ],
      shoes: [
        { id: 1, name: "Oxford Shoes", price: 19.99, image: "../Pictures/Men/Shoes/shoe (1).png" },
        { id: 2, name: "Loafers", price: 29.99, image: "../Pictures/Men/Shoes/shoe (2).png" },
        { id: 3, name: "Leather Boots", price: 49.99, image: "../Pictures/Men/Shoes/shoe (3).png" },
        { id: 4, name: "Casual Sneakers", price: 39.99, image: "../Pictures/Men/Shoes/shoe (4).png" },
        { id: 5, name: "Running Shoes", price: 59.99, image: "../Pictures/Men/Shoes/shoe (5).png" },
        { id: 6, name: "Chukka Boots", price: 69.99, image: "../Pictures/Men/Shoes/shoe (6).png" },
        { id: 7, name: "Dress Shoes", price: 79.99, image: "../Pictures/Men/Shoes/shoe (7).png" }
      ],
      accessories: [
        { id: 1, name: "Leather Belt", price: 29.99, image: "../Pictures/Accessories/belt.jpg" },
        { id: 2, name: "Socks", price: 9.99, image: "../Pictures/Accessories/socks.jpeg" },
        { id: 3, name: "Socks", price: 9.99, image: "../Pictures/Accessories/socks.png" },
        { id: 4, name: "Leather Wallet", price: 17.99, image: "../Pictures/Accessories/wallet.jpg" }
      ]
    },
    women: {
      dresses: [
        { id: 1, name: "Floral Print A-Line Dress", price: 39.99, image: "../Pictures/Women/Dresses/dress1.jpg" },
        { id: 2, name: "Bohemian Beachwear Dress", price: 34.99, image: "../Pictures/Women/Dresses/dress2.jpg" },
        { id: 3, name: "Sleek Satin Evening Gown", price: 59.99, image: "../Pictures/Women/Dresses/dress3.jpg" },
        { id: 4, name: "Casual Summer Maxi Dress", price: 44.99, image: "../Pictures/Women/Dresses/dress4.jpg" },
        { id: 5, name: "Cocktail Dress", price: 54.99, image: "../Pictures/Women/Dresses/dress5.jpg" }
      ],
 
      tops: [
        { id: 1, name: "Slim Fit Kamiz", price: 49.99, image: "../Pictures/Women/TraditionalWear/Traditionalwear1.jpg" },
        { id: 2, name: "Embroidered Anarkali", price: 69.99, image: "../Pictures/Women/TraditionalWear/Traditionalwear2.jpg" },
        { id: 3, name: "Classic Salwar Kameez", price: 39.99, image: "../Pictures/Women/TraditionalWear/Traditionalwear3.jpg" },
        { id: 4, name: "Chikan Work Kurti", price: 29.99, image: "../Pictures/Women/TraditionalWear/Traditionalwear4.jpg" },
        { id: 5, name: "Silk Kurti", price: 79.99, image: "../Pictures/Women/TraditionalWear/Traditionalwear5.jpg" },
        { id: 6, name: "Floral Print Kurta", price: 34.99, image: "../Pictures/Women/TraditionalWear/Traditionalwear6.jpg" },
        { id: 7, name: "Straight Cut Kurti", price: 34.99, image: "../Pictures/Women/TraditionalWear/Traditionalwear7.jpg" },
        { id: 8, name: "Lace Work Tunic", price: 54.99, image: "../Pictures/Women/TraditionalWear/Traditionalwear8.jpg" },
        { id: 9, name: "Georgette Chikan Kurti", price: 44.99, image: "../Pictures/Women/TraditionalWear/Traditionalwear9.jpg" }
      ],
      tshirts: [
        { id: 1, name: "Graphic Tee", price: 19.99, image: "../Pictures/Women/T-shirt/tshirt1.jpg" },
        { id: 2, name: "Striped T-Shirt", price: 14.99, image: "../Pictures/Women/T-shirt/tshirt2.jpg" },
        { id: 3, name: "V-Neck Cotton Tee", price: 18.99, image: "../Pictures/Women/T-shirt/tshirt3.jpg" },
        { id: 4, name: "Plain White T-Shirt", price: 12.99, image: "../Pictures/Women/T-shirt/tshirt4.jpg" },
        { id: 5, name: "Tie-Dye T-Shirt", price: 24.99, image: "../Pictures/Women/T-shirt/tshirt5.jpg" },
        { id: 6, name: "Floral Print Tee", price: 22.99, image: "../Pictures/Women/T-shirt/tshirt6.jpg" },
        { id: 7, name: "Oversized Graphic Tee", price: 27.99, image: "../Pictures/Women/T-shirt/tshirt7.jpg" }
      ],
      pants: [
        { id: 1, name: "ZARZAIN JEANS", price: 19.99, image: "../Pictures/Women/pant/pant (10).jpg" },
        { id: 2, name: "Slim Fit Denim Jeans", price: 29.99, image: "../Pictures/Women/pant/pant (2).jpg" },
        { id: 3, name: "High-Waisted Skinny Pants", price: 24.99, image: "../Pictures/Women/pant/pant (3).jpg" },
        { id: 4, name: "Cropped Bootcut Jeans", price: 32.99, image: "../Pictures/Women/pant/pant (4).jpg" },
        { id: 5, name: "Wide-Legged Trousers", price: 39.99, image: "../Pictures/Women/pant/pant (5).jpg" },
        { id: 6, name: "Straight Leg Chinos", price: 34.99, image: "../Pictures/Women/pant/pant (6).jpg" },
        { id: 7, name: "Linen Palazzo Pants", price: 29.99, image: "../Pictures/Women/pant/pant (7).jpg" },
        { id: 8, name: "Cargo Joggers", price: 27.99, image: "../Pictures/Women/pant/pant (8).jpg" },
        { id: 9, name: "Tapered Work Pants", price: 39.99, image: "../Pictures/Women/pant/pant (9).jpg" },
        { id: 10, name: "Faux Leather Leggings", price: 49.99, image: "../Pictures/Women/pant/pant (1).jpg" }
      ],
      shoes: [
        { id: 1, name: "Women’s Casual Flats", price: 29.99, image: "../Pictures/Women/Shoes/shoe (1).jpg" },
        { id: 2, name: "Comfortable Sandals", price: 19.99, image: "../Pictures/Women/Shoes/shoe (2).jpg" },
        { id: 3, name: "Classic Ballet Flats", price: 24.99, image: "../Pictures/Women/Shoes/shoe (3).jpg" },
        { id: 4, name: "Leather Booties", price: 49.99, image: "../Pictures/Women/Shoes/shoe (4).jpg" },
        { id: 5, name: "High Heel Pumps", price: 59.99, image: "../Pictures/Women/Shoes/shoe (5).jpg" },
        { id: 6, name: "Sporty Sneakers", price: 39.99, image: "../Pictures/Women/Shoes/shoe (6).jpg" },
        { id: 7, name: "Peep Toe Heels", price: 44.99, image: "../Pictures/Women/Shoes/shoe (7).jpg" },
        { id: 8, name: "Slip-On Loafers", price: 34.99, image: "../Pictures/Women/Shoes/shoe (8).jpg" }
      ]
    }
  };
  
  let currentProducts = [];

  function loadProducts(category, subCategory) {
      let container;
      if (category === "women") {
          container = document.getElementById('women-products');
          if (subCategory) {
              currentProducts = products.women[subCategory];
              loadCategoryProducts(container, currentProducts);
          } else {
              currentProducts = [...products.women.dresses, ...products.women.tops, ...products.women.tshirts, ...products.women.pants, ...products.women.shoes];
              loadCategoryProducts(container, currentProducts);
          }
      } else if (category === "men") {
          container = document.getElementById('men-products');
          if (subCategory) {
              currentProducts = products.men[subCategory];
              loadCategoryProducts(container, currentProducts);
          } else {
              currentProducts = [...products.men.tShirts, ...products.men.shirts, ...products.men.jackets, ...products.men.shoes];
              loadCategoryProducts(container, currentProducts);
          }
      } else if (category === "accessories") {
          container = document.getElementById('accessories-products');
          currentProducts = products.accessories;
          loadCategoryProducts(container, currentProducts);
      }
  }
  
  function loadCategoryProducts(container, items) {
      container.innerHTML = '';
      items.forEach(product => {
          const productCard = document.createElement('div');
          productCard.classList.add('product');
          productCard.innerHTML = `
              <img src="${product.image}" alt="${product.name}">
              <div class="product-name">${product.name}</div>
              <div class="product-price">$${product.price}</div>
              <button class="add-to-cart-btn">Add to Cart</button>
          `;
          container.appendChild(productCard);
      });
  }
  
  function sortProducts() {
      const sortBy = document.getElementById("sort-options").value;
      if (sortBy === "price-asc") {
          currentProducts.sort((a, b) => a.price - b.price);
      } else if (sortBy === "price-desc") {
          currentProducts.sort((a, b) => b.price - a.price);
      } else if (sortBy === "name-asc") {
          currentProducts.sort((a, b) => a.name.localeCompare(b.name));
      } else if (sortBy === "name-desc") {
          currentProducts.sort((a, b) => b.name.localeCompare(a.name));
      }
      const category = getCategoryFromURL();
      const subCategory = getSubCategoryFromURL();
      loadProducts(category, subCategory);
  }
  
  window.onload = function() {
      const category = getCategoryFromURL();
      const subCategory = getSubCategoryFromURL();
      loadProducts(category, subCategory);
      document.getElementById("sort-options").value = "default";
  };
  
  function getCategoryFromURL() {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get('category');
  }
  
  function getSubCategoryFromURL() {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get('subcategory');
  }
  
  document.getElementById('search-box').addEventListener('input', function() {
      const searchQuery = this.value.toLowerCase();
      const category = getCategoryFromURL();
      const subCategory = getSubCategoryFromURL();
  
      if (!category || !products[category]) {
          console.error("Category not found in URL or data.");
          return;
      }
  
      const productList = subCategory ? products[category][subCategory] : Object.values(products[category]).flat();
      const filteredProducts = productList.filter(product =>
          product.name.toLowerCase().includes(searchQuery)
      );
  
      const containerId = category === "men" ? "men-products" :
          category === "women" ? "women-products" :
          "accessories-products";
      const container = document.getElementById(containerId);
  
      loadCategoryProducts(container, filteredProducts);
  });
  
  let cart = [];
  
  function addToCart(product) {
      const existingProductIndex = cart.findIndex(item => item.id === product.id);
  
      if (existingProductIndex > -1) {
          cart[existingProductIndex].quantity += 1;
      } else {
          cart.push({
              ...product,
              quantity: 1
          });
      }
  
      updateCartCount();
      saveCart();
      showCartNotification(product);
  }
  
  function updateCartCount() {
      const cartCountElement = document.querySelector('.cart-count');
      if (cartCountElement) {
          const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
          cartCountElement.textContent = totalItems;
      }
  }
  
  function showCartNotification(product) {
      const notification = document.createElement('div');
      notification.classList.add('cart-notification');
      notification.innerHTML = `<p>${product.name} added to cart</p>`;
      document.body.appendChild(notification);
  
      setTimeout(() => {
          notification.remove();
      }, 3000);
  }
  
  function saveCart() {
      localStorage.setItem('vogueThreadsCart', JSON.stringify(cart));
  }
  
  function loadCart() {
      const savedCart = localStorage.getItem('vogueThreadsCart');
      if (savedCart) {
          cart = JSON.parse(savedCart);
          updateCartCount();
      }
  }
  
  function renderCartModal() {
      const cartModal = document.createElement('div');
      cartModal.id = 'cart-modal';
      cartModal.classList.add('cart-modal');
  
      const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
  
      cartModal.innerHTML = `
        <div class="cart-modal-content">
            <span class="cart-close">&times;</span>
            <h2>Your Cart</h2>
            <div id="cart-items">
                ${cart.length > 0 ? cart.map(item => `
                    <div class="cart-item" data-id="${item.id}">
                        <img src="${item.image}" alt="${item.name}">
                        <div class="cart-item-details">
                            <p>${item.name}</p>
                            <p>$${item.price.toFixed(2)}</p>
                            <div class="quantity-controls">
                                <button class="decrease-qty">-</button>
                                <span class="quantity">${item.quantity}</span>
                                <button class="increase-qty">+</button>
                            </div>
                            <p>Subtotal: $${(item.price * item.quantity).toFixed(2)}</p>
                            <button class="remove-item">Remove</button>
                        </div>
                    </div>
                `).join('') : '<p>Your cart is empty</p>'}
            </div>
            <div class="cart-total">
                <strong>Total: $${total.toFixed(2)}</strong>
            </div>
            <button id="checkout-btn">Proceed to Checkout</button>
        </div>
    `;
  
      const existingModal = document.getElementById('cart-modal');
      if (existingModal) {
          existingModal.remove();
      }
  
      document.body.appendChild(cartModal);
  
      setupCartModalListeners();
  }
  
  function setupCartModalListeners() {
      const modal = document.getElementById('cart-modal');
      if (!modal) return;
  
      const closeBtn = modal.querySelector('.cart-close');
      closeBtn.addEventListener('click', () => {
          modal.remove();
      });
  
      const removeButtons = modal.querySelectorAll('.remove-item');
      removeButtons.forEach(btn => {
          btn.addEventListener('click', (e) => {
              const itemElement = e.target.closest('.cart-item');
              const itemId = itemElement.dataset.id;
  
              cart = cart.filter(item => item.id.toString() !== itemId);
  
              saveCart();
              updateCartCount();
              renderCartModal();
          });
      });
  
      const increaseButtons = modal.querySelectorAll('.increase-qty');
      increaseButtons.forEach(btn => {
          btn.addEventListener('click', (e) => {
              const itemElement = e.target.closest('.cart-item');
              const itemId = itemElement.dataset.id;
  
              const cartItem = cart.find(item => item.id.toString() === itemId);
              if (cartItem) {
                  cartItem.quantity += 1;
                  saveCart();
                  updateCartCount();
                  renderCartModal();
              }
          });
      });
  
      const decreaseButtons = modal.querySelectorAll('.decrease-qty');
      decreaseButtons.forEach(btn => {
          btn.addEventListener('click', (e) => {
              const itemElement = e.target.closest('.cart-item');
              const itemId = itemElement.dataset.id;
  
              const cartItemIndex = cart.findIndex(item => item.id.toString() === itemId);
              if (cartItemIndex > -1) {
                  if (cart[cartItemIndex].quantity > 1) {
                      cart[cartItemIndex].quantity -= 1;
                  } else {
                      cart.splice(cartItemIndex, 1);
                  }
                  saveCart();
                  updateCartCount();
                  renderCartModal();
              }
          });
      });
  
      const checkoutBtn = modal.querySelector('#checkout-btn');
      checkoutBtn.addEventListener('click', () => {
          alert('Checkout functionality will be implemented in future updates.');
      });
  }
  
  function initializeCart() {
      loadCart();
  
      document.addEventListener('click', (e) => {
          if (e.target.classList.contains('add-to-cart-btn')) {
              const productElement = e.target.closest('.product');
              const imageSrc = productElement.querySelector('img').src;
              const name = productElement.querySelector('.product-name').textContent;
              const price = parseFloat(productElement.querySelector('.product-price').textContent.replace('$', ''));
  
              const category = getCategoryFromURL();
              const subCategory = getSubCategoryFromURL();
  
              let productObj;
              if (category === 'men') {
                  productObj = products.men[subCategory].find(p => p.name === name);
              } else if (category === 'women') {
                  productObj = products.women[subCategory].find(p => p.name === name);
              } else if (category === 'accessories') {
                  productObj = products.accessories.find(p => p.name === name);
              }
  
              if (productObj) {
                  addToCart(productObj);
              }
          }
  
          if (e.target.closest('.cart-icon')) {
              renderCartModal();
          }
      });
  }
  
  document.addEventListener('DOMContentLoaded', () => {
      initializeCart();
  });