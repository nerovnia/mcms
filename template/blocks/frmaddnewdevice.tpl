<div id="frm-add-new-device">
  <div id="frm-add-new-device-shape">
    <form>
      <div class="frm-adddevice-header">Add new device...</div>
      <div class="frm-adddevice-content">
        <div class="frm-inp-str">
          <div class="frm-inp-str-lbl">Input device name:</div>
          <div class="frm-inp-str-inp">
            <input type="text" name="dev-name">
          </div>
        </div>
        <div class="frm-inp-str">
          <div class="frm-inp-str-lbl">Input ip:</div>
          <div class="frm-inp-str-inp">
            <input type="text" name="ip">
          </div>
        </div>
        <div class="frm-inp-str">
          <div class="frm-inp-str-lbl">Input port:</div>
          <div class="frm-inp-str-inp">
            <input type="text" name="port">
          </div>
        </div>
        <div class="frm-inp-str">
          <div class="frm-inp-str-lbl">Input mac-address:</div>
          <div class="frm-inp-str-inp">
            <input type="text" name="mac-addr">
          </div>
        </div>

        <div class="btn-block">
          <div class="btn-add">
            <button  onclick="addNewDevice()">Add</button>
          </div>
          <div class="btn-cancel">
            <button onclick="cancelNewDevice()">Cancel</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
