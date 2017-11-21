<div id="devices-panel">
  <div id="device-panel-1" class="device-panel">
    <div class="dp-header">
      <div class="add-dev" onclick="addDevice()">+</div>
      <div class="dp-header-text">Smart home server</div>
      <div class="del-dev" onclick="delDevice()">-</div>
    </div>
    <div class="ip-address">
      <div class="dp-ip">ip: 251.12.151.24</div>
      <div class="dp-port">port: 20</div>
    </div>
    <div id="dp-mac">mac-addr: 00:25:96:FF:FE:12:34:56</div>
    <div class="dp-driver">
<!-- 				<form action="template.html"> -->
      <form action="lod/">
        <div class="radio-group">
          <div class="dp-driver-on">
            <input type="radio" name="r-dev-on" value="On">On<Br>
          </div>
          <div class="dp-driver-off">
            <input type="radio" name="r-dev-on" value="Off">Off<Br>
          </div>
          <div class="dp-driver-reset">
            <input type="radio" name="r-dev-on" value="Reset">Reset<Br>
          </div>
        </div>
        <div class="dp-current-state">
          <div class="dp-cs-header">Current state:</div>
          <div class="dp-cs-message">Device is off</div>
        </div>
        <div class="btn-block">
          <div class="btn-go">
            <button type="submit">Go</button>
          </div>
          <div class="btn-reset">
            <button>Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
