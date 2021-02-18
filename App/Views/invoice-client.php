<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600" rel="stylesheet" type="text/css">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/stylesheet.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/print.css'); ?>"media="print" />
    <title>Invoice</title>
</head>

<body>
    <div id="mainHeader" class="header">
        <h1>Invoice Konkit</h1>
        <hr />
    </div>


    <div class="invoice__container" id="printable">
        <section id="invoiceHeader">
            <div class="invoice__header">
                <span class="invoice__date">Tanggal: 8 Desember 2020</span>
                <span class="invoice__id">Invoice ID:</span>
            </div>
        </section>

        <section>
            <div class="invoice__info">
                <div class="invoice__to">
                    <ul class="clientInfo">
                        <li class="capital">Nama Freelancer</li>
                        <li class="input__client__field no-list-style"><input class="input__client__info" type="text"
                                placeholder="Informasi penerima">
                            <button type="submit" class="add__client__info">Tambahkan</button></li>
                    </ul>
                </div>
               
            </div>
        </section>

        <section>
            <div class="invoice__description">
                <ul class="invoiceDescription">
                    <li class="capital desc">Deskripsi</li>
                    <li>
                        <div class="subsciption">
                            <span class="type"> <select class="invoice__invoice__type">
                                    <option value="maintenance" selected>Website Maintenance</option>
                                    <option value="development">Pengembangan Website </option>
                                    <option value="design">Website Design</option>
                                </select></span>
                            <div class="desc__values__input">
                                <span class="quantity"><input class="input__description__quantity" type="text"
                                        placeholder="Jumlah">

                                </span>
                                <span class="value"><input class="input__description__value" type="text"
                                        placeholder="Nilai proyek">
                                    <button type="submit" class="add__description__values">Tambahkan</button>
                                </span>
                            </div>
                        </div>
                    </li>
                    <ul class="desc__items">
                        <li class="input__description__field no-list-style"><input class="input__invoice__description"
                                type="text" placeholder="Deskripsi invoice">
                            <button type="submit" class="add__invoice__description ">Tambahkan</button></li>

                    </ul>

                </ul>
                <br />
                <ul class="extra__info">
                    <li class="capital">
                        terms & konditions
                    </li>
                    <li>
                        Simpan invoice sebagai bukti pembayaran resmi
                    </li>
                    <li>Jika ada masalah segera hubungi gavin@konkit.com</li>

                </ul>

            </div>
        </section>

        <section>
            <div class="invoice__payment">
                <ul>
                    <li class="capital">Pembayaran</li>
                    <li class="invoice__subtotal cost">
                        <span class="label">SUBTOTAL</span>
                        <span class="value">0</span>
                    </li>
                    <li class="invoice__taxes cost">
                        <span class="label"> + 13% Biaya Konkit </span>

                        <span class="value"> + 0</span>
                    </li>
                    <li class="invoice__total cost" style="color: red">
                        <span class="label">TOTAL </span>
                        <span class="value">0</span>
                    </li>
                </ul>
                <br />


                <div class="invoice__footer">
                    <h2 class="capital footer">Terima kasih telah menggunakan Konkit</h2>
                    <br />

                </div>

            </div>
        </section>

        <button id="non-printable" type="submit" class="add__invoice">Masukan dan Cetak</button>
    </div>


    <script>
        const invoiceController = (() => {
  class Invoice {
    constructor(id, client, description, total) {
      this.id = id;
      this.client = client;
      this.description = description;
      this.total = total;
    }
    generateInvoiceID(len) {
      let id = "";
      let charset = "abcdefghijklmnopqrstuvwxyz0123456789";
      for (let i = 0; i < len; i++) {
        id += charset.charAt(Math.floor(Math.random() * charset.length));
      }
      this.invoiceID = id;
    }
    invoiceDate() {
      let today = new Date().toUTCString();

      let splitDate = today.split(" ").splice(0, 4);

      this.invoiceDate = splitDate.join(" ");
    }
  }
  class Maintenance extends Invoice {
    constructor(id, client, description, total) {
      super(id, client, description, total);
    }
  }
  class Development extends Invoice {
    constructor(id, client, description, total) {
      super(id, client, description, total);
    }
  }

  // Data Structure

  const data = {
    allInvoices: {
      maintenance: [],
      development: []
    },
    attribute: {
      client: [],
      description: [],
      quantity: null,
      itemPrice: null,
      subTotal: null,
      taxPerc: 13,
      taxValue: null,
      invoiceTotal: null
    }
  };

  const calcSubtotal = () => {
    const newSubTotal = data.attribute.quantity * data.attribute.itemPrice;
    data.attribute.subTotal = newSubTotal;
  };

  const calcTaxes = () => {
    const newTaxValue =
      (data.attribute.subTotal / 100) * data.attribute.taxPerc;
    data.attribute.taxValue = newTaxValue;
  };
  const calcTotal = () => {
    const newInvoiceTotal = data.attribute.subTotal + data.attribute.taxValue;
    data.attribute.invoiceTotal = newInvoiceTotal;
  };

  return {
    testing: type => {
      return { data };
    },
    getTitle: () => {
      const title = document.getElementsByTagName("title")[0].innerHTML;
      return title;
    },
    addInvoice: type => {
      let newInvoice, ID;

      const newInvoiceType = data.allInvoices[type];

      // Create new ID
      newInvoiceType.length > 0
        ? (ID = newInvoiceType[newInvoiceType.length - 1].id + 1)
        : (ID = 0);
      // create new Invoice based on type
      const { client, description, invoiceTotal } = data.attribute;
      type === "maintenance"
        ? (newInvoice = new Maintenance(ID, client, description, invoiceTotal))
        : type === "development"
          ? (newInvoice = new Development(ID, client, description, invoiceTotal))
          : null;

      if (invoiceTotal > 0) {
        // generate random invoiceID
        newInvoice.generateInvoiceID(5);
        // generate random invoiceDate
        newInvoice.invoiceDate(5);
        // push new invoice to data structure

        newInvoiceType.push(newInvoice);

        // return new element

        return newInvoice;
      }
    },
    addNewInput: (inputData, type) => {
      let newDataInput;
      const newInput = data.attribute[type];

      // Create new ID
      newInput.length > 0
        ? (ID = newInput[newInput.length - 1].ID + 1)
        : (ID = 0);

      newDataInput = { inputData, ID, type };
      // push new invoice to data structure
      newInput.push(newDataInput);

      // return new element
      return newDataInput;
    },
    updateDescValues: (quantity, price) => {
      return {
        quantity: (data.attribute.quantity = quantity),
        price: (data.attribute.itemPrice = price)
      };
    },
    deleteItem: (type, id) => {
      //Find item index by item id
      itemIndex = data.attribute[type].findIndex(el => el.ID === id);

      //Remove item from array based on its index
      itemIndex !== -1 ? data.attribute[type].splice(itemIndex, 1) : null;
    },
    getTotals: () => {
      //1. calculate subtotal
      calcSubtotal();

      //2. calculate taxes
      calcTaxes();

      //3. calculate total
      calcTotal();

      return {
        sub: data.attribute.subTotal,
        tax: data.attribute.taxValue,
        total: data.attribute.invoiceTotal
      };
    }
  };
})();

const UIController = (() => {
  const DOMStrings = {
    type: ".invoice__invoice__type",
    inputValue: ".input__description__value",
    inputQuantity: ".input__description__quantity",
    addDescValues: ".add__description__values",
    inputClient: ".input__client__info",
    addClient: ".add__client__info",
    inputDesc: ".input__invoice__description",
    addDesc: ".add__invoice__description",
    subTotal: ".invoice__subtotal",
    tax: ".invoice__taxes",
    total: ".invoice__total",
    submit: ".add__invoice",
    date: ".invoice__date",
    invoiceID: ".invoice__id"
  };

  const formatNumber = num => {
    let int, dec;

    num = Math.abs(num)
      .toFixed(2)
      .split(".");

    int = num[0];
    if (int.length > 3) {
      int = `${int.substr(0, int.length - 3)}, ${int.substr(
        int.length - 3,
        3
      )}`;
    }
    dec = num[1];
    return `${int}.${dec}$`;
  };
  return {
    getDOMStrings: () => {
      return DOMStrings;
    },
    getNewInput: selectorID => {
      return {
        data: document.querySelector(selectorID).value
      };
    },
    getDescValues: () => {
      return {
        quantity: parseFloat(
          document.querySelector(DOMStrings.inputQuantity).value
        ),
        price: parseFloat(document.querySelector(DOMStrings.inputValue).value)
      };
    },
    getInvoiceType: () => {
      return document.querySelector(DOMStrings.type).value;
    },
    clearInputFields: () => {
      let inputFields = document
        .querySelector(".invoice__container")
        .querySelectorAll("input");

      inputFields.forEach(el => (el.value = ""));
    },

    displayNewInput: item => {
      document.querySelector(`.input__${item.type}__field`).insertAdjacentHTML(
        "beforebegin",
        `<li class="${item.type}__item"   id="${item.type}-${item.ID}">${item.inputData}
          <button type="submit" class="delete__${item.type}__info no-list-style">delete</button></li>`
      );
    },
    removeInputsElements: () => {
      const descInputFields = document.querySelector(".desc__values__input");
      descInputFields.parentNode.removeChild(descInputFields);
    },
    updateValues: (subscription, totals) => {
      document.querySelector(".subsciption").insertAdjacentHTML(
        "beforeend",
        `
       <div class="desc__values__input withMargin">
                                <span class="quantity">x
      ${subscription.quantity}
                                </span>
                                <span class="value"> ${formatNumber(
          subscription.price
        )}
                                </span>
                            </div>
      `
      );
      document
        .querySelector(DOMStrings.subTotal)
        .querySelector(".value").textContent = formatNumber(totals.sub);

      document
        .querySelector(DOMStrings.tax)
        .querySelector(".value").textContent = formatNumber(totals.tax);

      document
        .querySelector(DOMStrings.total)
        .querySelector(".value").textContent = formatNumber(totals.total);
    },
    removeItem: slectorID => {
      const listItem = document.getElementById(slectorID);
      listItem.parentNode.removeChild(listItem);
    },
    updateInvoice: invoice => {
      // 1. remove all input fields
      const inputFields = document.querySelectorAll(".no-list-style");
      inputFields.forEach(el => el.parentNode.removeChild(el));

      // 2. Date and invoiceID
      document.querySelector(
        DOMStrings.date
      ).textContent = `issued: ${invoice.invoiceDate}`.toLocaleUpperCase();

      document.querySelector(
        DOMStrings.invoiceID
      ).textContent = `invoice_id: ${invoice.invoiceID}`.toLocaleUpperCase();
    }
  };
})();

const controller = ((inCtrl, UICtrl) => {
  const setupEventListeners = () => {
    const DOM = UICtrl.getDOMStrings();

    document
      .querySelector(DOM.addClient)
      .addEventListener("click", () => ctrlAddInput("client", DOM.inputClient));

    document
      .querySelector(DOM.inputClient)
      .addEventListener("keydown", e =>
        e.keyCode === 13 || e.which === 13
          ? ctrlAddInput("client", DOM.inputClient)
          : null
      );

    document
      .querySelector(DOM.addDesc)
      .addEventListener("click", () =>
        ctrlAddInput("description", DOM.inputDesc)
      );

    document
      .querySelector(DOM.inputDesc)
      .addEventListener("keydown", e =>
        e.keyCode === 13 || e.which === 13
          ? ctrlAddInput("description", DOM.inputDesc)
          : null
      );

    document
      .querySelector(DOM.addDescValues)
      .addEventListener("click", ctrlUpdateDescValues);

    document
      .querySelector(DOM.inputQuantity)
      .addEventListener("keydown", e =>
        e.keyCode === 13 || e.which === 13
          ? ctrlAddInput("description", DOM.inputDesc)
          : null
      );

    document
      .querySelector(".invoice__container")
      .addEventListener("click", ctrlDeleteItem);

    document
      .querySelector(DOM.submit)
      .addEventListener("click", ctrlAddInvoice);
  };

  const ctrlAddInput = (type, inputField) => {
    let input, newInputData;

    // 1. Get clientInput
    input = UICtrl.getNewInput(inputField);

    // 2. Add clientInput to invoiceCtrl
    if (input.data !== "") {
      newInputData = inCtrl.addNewInput(input.data, type);

      // 3. Add clientInput to UI
      UICtrl.displayNewInput(newInputData);

      // 4. clear input fields
      UICtrl.clearInputFields();
    }
  };

  const ctrlUpdateDescValues = () => {
    let input, sub;
    // 1. Get clientInput
    input = UICtrl.getDescValues();

    // 2. Add clientInput to invoiceCtrl
    if (input.price > 0 && input.quantity > 0) {
      subscription = inCtrl.updateDescValues(input.quantity, input.price);
      // 3. caculate and get invoice totals from invoiceController
      totals = inCtrl.getTotals();
      // 4. remove input fields
      UICtrl.removeInputsElements();
      // 5. update description values in the UI
      UICtrl.updateValues(subscription, totals);
    }
  };

  const ctrlDeleteItem = event => {
    itemID = event.target.parentNode.id;

    if (itemID.includes("client") || itemID.includes("description")) {
      splitID = itemID.split("-");
      type = splitID[0];
      ID = parseInt(splitID[1]);

      //1. Delete item from data structure

      inCtrl.deleteItem(type, ID);

      //2. Remove item from UI
      UICtrl.removeItem(itemID);
    }
  };

  const ctrlAddInvoice = () => {
    let type, newInvoice;

    // 1. get Invoice type
    type = UICtrl.getInvoiceType();

    // 2. Add invoice to invoiceCtrl

    newInvoice = inCtrl.addInvoice(type);
    if (newInvoice) {
      console.log(newInvoice);
      // 3. Add invoice to UI
      UICtrl.updateInvoice(newInvoice);

      // 4. Clear input Fields
      UICtrl.clearInputFields();

      // 5. Update the HTML Document title
      updateDocTitle(newInvoice.client[0].inputData, newInvoice.invoiceID);
      // 6. Print invoice
      printpage();
    }
  };
  const updateDocTitle = (client, invoice_id) => {
    document.getElementsByTagName(
      "title"
    )[0].innerHTML = `${client}_invoice_${invoice_id}`;
  };
  const printpage = () => {
    window.print();
  };

  return {
    init: () => {
      setupEventListeners();
    }
  };
})(invoiceController, UIController);

controller.init();

    </script>

</body>

</html>