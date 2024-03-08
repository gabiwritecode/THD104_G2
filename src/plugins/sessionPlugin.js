export default {
  install: (app) => {
    app.config.globalProperties.$checkSession = async function () {
      try {
        const response = await fetch('php/get_user_data.php');
        const data = await response.json();
        return data && data.user_id;
      } catch (error) {
        console.error('Error:', error);
        return false;
      }
    };
  },
};