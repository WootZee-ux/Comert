function demoCheckout(type, plan) {
  const when = new Date().toLocaleString('ro-RO');
  alert(`Demo ${type}: ${plan}\n\nTranzacție simulată la ${when}.\nNu se procesează plăți reale.`);
}
