<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserScopeTeamsAppInstallation extends TeamsAppInstallation implements Parsable 
{
    /**
     * @var Chat|null $chat The chat between the user and Teams app.
    */
    private ?Chat $chat = null;
    
    /**
     * Instantiates a new UserScopeTeamsAppInstallation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userScopeTeamsAppInstallation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserScopeTeamsAppInstallation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserScopeTeamsAppInstallation {
        return new UserScopeTeamsAppInstallation();
    }

    /**
     * Gets the chat property value. The chat between the user and Teams app.
     * @return Chat|null
    */
    public function getChat(): ?Chat {
        return $this->chat;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'chat' => function (ParseNode $n) use ($o) { $o->setChat($n->getObjectValue(array(Chat::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('chat', $this->chat);
    }

    /**
     * Sets the chat property value. The chat between the user and Teams app.
     *  @param Chat|null $value Value to set for the chat property.
    */
    public function setChat(?Chat $value ): void {
        $this->chat = $value;
    }

}
