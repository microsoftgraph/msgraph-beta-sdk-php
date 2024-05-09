<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupChatTeamsAppInstallationScopeInfo extends TeamsAppInstallationScopeInfo implements Parsable 
{
    /**
     * Instantiates a new GroupChatTeamsAppInstallationScopeInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupChatTeamsAppInstallationScopeInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupChatTeamsAppInstallationScopeInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupChatTeamsAppInstallationScopeInfo {
        return new GroupChatTeamsAppInstallationScopeInfo();
    }

    /**
     * Gets the chatId property value. The chatId property
     * @return string|null
    */
    public function getChatId(): ?string {
        $val = $this->getBackingStore()->get('chatId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chatId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'chatId' => fn(ParseNode $n) => $o->setChatId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('chatId', $this->getChatId());
    }

    /**
     * Sets the chatId property value. The chatId property
     * @param string|null $value Value to set for the chatId property.
    */
    public function setChatId(?string $value): void {
        $this->getBackingStore()->set('chatId', $value);
    }

}
