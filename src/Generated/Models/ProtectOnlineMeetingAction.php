<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProtectOnlineMeetingAction extends LabelActionBase implements Parsable 
{
    /**
     * Instantiates a new ProtectOnlineMeetingAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.protectOnlineMeetingAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProtectOnlineMeetingAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProtectOnlineMeetingAction {
        return new ProtectOnlineMeetingAction();
    }

    /**
     * Gets the allowedForwarders property value. The allowedForwarders property
     * @return OnlineMeetingForwarders|null
    */
    public function getAllowedForwarders(): ?OnlineMeetingForwarders {
        return $this->getBackingStore()->get('allowedForwarders');
    }

    /**
     * Gets the allowedPresenters property value. The allowedPresenters property
     * @return OnlineMeetingPresenters|null
    */
    public function getAllowedPresenters(): ?OnlineMeetingPresenters {
        return $this->getBackingStore()->get('allowedPresenters');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedForwarders' => fn(ParseNode $n) => $o->setAllowedForwarders($n->getEnumValue(OnlineMeetingForwarders::class)),
            'allowedPresenters' => fn(ParseNode $n) => $o->setAllowedPresenters($n->getEnumValue(OnlineMeetingPresenters::class)),
            'isCopyToClipboardEnabled' => fn(ParseNode $n) => $o->setIsCopyToClipboardEnabled($n->getBooleanValue()),
            'isLobbyEnabled' => fn(ParseNode $n) => $o->setIsLobbyEnabled($n->getBooleanValue()),
            'lobbyBypassSettings' => fn(ParseNode $n) => $o->setLobbyBypassSettings($n->getObjectValue([LobbyBypassSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isCopyToClipboardEnabled property value. The isCopyToClipboardEnabled property
     * @return bool|null
    */
    public function getIsCopyToClipboardEnabled(): ?bool {
        return $this->getBackingStore()->get('isCopyToClipboardEnabled');
    }

    /**
     * Gets the isLobbyEnabled property value. The isLobbyEnabled property
     * @return bool|null
    */
    public function getIsLobbyEnabled(): ?bool {
        return $this->getBackingStore()->get('isLobbyEnabled');
    }

    /**
     * Gets the lobbyBypassSettings property value. The lobbyBypassSettings property
     * @return LobbyBypassSettings|null
    */
    public function getLobbyBypassSettings(): ?LobbyBypassSettings {
        return $this->getBackingStore()->get('lobbyBypassSettings');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowedForwarders', $this->getAllowedForwarders());
        $writer->writeEnumValue('allowedPresenters', $this->getAllowedPresenters());
        $writer->writeBooleanValue('isCopyToClipboardEnabled', $this->getIsCopyToClipboardEnabled());
        $writer->writeBooleanValue('isLobbyEnabled', $this->getIsLobbyEnabled());
        $writer->writeObjectValue('lobbyBypassSettings', $this->getLobbyBypassSettings());
    }

    /**
     * Sets the allowedForwarders property value. The allowedForwarders property
     * @param OnlineMeetingForwarders|null $value Value to set for the allowedForwarders property.
    */
    public function setAllowedForwarders(?OnlineMeetingForwarders $value): void {
        $this->getBackingStore()->set('allowedForwarders', $value);
    }

    /**
     * Sets the allowedPresenters property value. The allowedPresenters property
     * @param OnlineMeetingPresenters|null $value Value to set for the allowedPresenters property.
    */
    public function setAllowedPresenters(?OnlineMeetingPresenters $value): void {
        $this->getBackingStore()->set('allowedPresenters', $value);
    }

    /**
     * Sets the isCopyToClipboardEnabled property value. The isCopyToClipboardEnabled property
     * @param bool|null $value Value to set for the isCopyToClipboardEnabled property.
    */
    public function setIsCopyToClipboardEnabled(?bool $value): void {
        $this->getBackingStore()->set('isCopyToClipboardEnabled', $value);
    }

    /**
     * Sets the isLobbyEnabled property value. The isLobbyEnabled property
     * @param bool|null $value Value to set for the isLobbyEnabled property.
    */
    public function setIsLobbyEnabled(?bool $value): void {
        $this->getBackingStore()->set('isLobbyEnabled', $value);
    }

    /**
     * Sets the lobbyBypassSettings property value. The lobbyBypassSettings property
     * @param LobbyBypassSettings|null $value Value to set for the lobbyBypassSettings property.
    */
    public function setLobbyBypassSettings(?LobbyBypassSettings $value): void {
        $this->getBackingStore()->set('lobbyBypassSettings', $value);
    }

}
