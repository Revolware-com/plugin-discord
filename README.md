Discord plugin for Kanboard
=========================

Receive Kanboard notifications on Discord.

Author
------

- Andrej Zlámala
- License MIT

Requirements
------------

- Kanboard >= 1.0.37

Installation
------------

You have the choice between 3 methods:

1. Install the plugin from the Kanboard plugin manager in one click
2. Download the zip file and decompress everything under the directory `plugins/Discord`
3. Clone this repository into the folder `plugins/Discord`

Note: Plugin folder is case-sensitive.

Configuration
-------------

Firstly, you have to generate a new webhook url in Discord (**Configured Integrations > Incoming Webhook**) [from here](https://discord.com/apps/A0F7XDUAZ-incoming-webhooks).

You can define only one webhook url (**Settings > Integrations > Discord**) and override the channel for each project and user.

### Receive individual user notifications

- Go to your user profile then choose **Integrations > Discord**
- Copy and paste the webhook url from Discord or leave it blank if you want to use the global webhook url
- Use `@username` to receive direct message to your user
- Enable Discord in your user notifications **Notifications > Discord**

### Receive project notifications to a room

- Go to the project settings then choose **Integrations > Discord**
- Copy and paste the webhook url from Discord or leave it blank if you want to use the global webhook url
- Use `#channel` to receive messages in a specific channel
- Enable Discord in your project notifications **Notifications > Discord**

## Troubleshooting

- Enable the debug mode
- All connection errors with the Discord API are recorded in the log files `data/debug.log` or syslog
