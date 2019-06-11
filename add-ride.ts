import { enableRipple } from '@syncfusion/ej2-base';
enableRipple(false);
import { DateTimePicker } from '@syncfusion/ej2-calendars';
/**
 * Date format DatePicker sample
 */

let datetimepicker: DateTimePicker = new DateTimePicker({
    format: 'dd-MMM-yy hh:mm a',
    value: new Date(),
    placeholder: 'Select a date and time',
    width: "233px"
});
datetimepicker.appendTo('#datetimepicker');
datetimepicker.show("time");
