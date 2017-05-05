/**
 * @file
 * Override save and delete prototypes.
 */

jQuery(function($) {
  Drupal.OpeningHours.InstanceEditView.prototype.saveSucceeded = function () {
    this.remove();

    // When instance is saved, navigate to it, so the user can see
    // something has happened.
    Drupal.OpeningHours.adminApp.navigate('date/' + this.model.get('date'));

    var params = window.location.pathname.split('/');
    var nid = (params[3] !== undefined) ? params[3] : null;

    $.ajax({
      type: "POST",
      url: '/ding_library/opening_hours/save',
      data: {
        'nid': nid
      },
      success: function () {
        window.location.reload();
      }
    });
  };

  Drupal.OpeningHours.InstanceEditView.prototype.deleteModel = function (options) {
    var headers = {},
      view = this;

    // Add a header with our propagateChanges verdict, if any.
    // This due to the sad fact that setting it as data on a DELETE
    // request does not currently work with jQuery.
    if (options && options.propagateChanges) {
      this.model.set({propagateChanges: options.propagateChanges});
    }

    this.model.destroy({
      error: function () {
        console.log('fail');
      },
      success: function () {
        view.remove();

        // Navigate to the date to show the change.
        Drupal.OpeningHours.adminApp.navigate('date/' + view.model.get('date'));

        var params = window.location.pathname.split('/');
        var nid = (params[3] !== undefined) ? params[3] : null;
        $.ajax({
          type: "POST",
          url: '/ding_library/opening_hours/save',
          data: {
            'nid': nid
          },
          success: function () {
            window.location.reload();
          }
        });
      }
    });
  };
});
