"use strict";

exports.fetch = fetch;
exports.instantiate = instantiate;

function fetch(load) {
  return Promise.resolve(load.address);
}

var httpReg = /https?:\/\/.*?\//i;

function instantiate(load) {
  var ver = System.meepworks && System.meepworks.appVersion || "";
  //remove hostname to align with server side generated paths
  var address = load.address.replace(httpReg, "/");
  return address + ver;
}

Object.defineProperty(exports, "__esModule", {
  value: true
});

//# sourceMappingURL=./asset.js.map