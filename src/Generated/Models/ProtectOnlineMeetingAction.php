<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProtectOnlineMeetingAction extends LabelActionBase implements Parsable 
{
    /**
     * @var OnlineMeetingForwarders|null $allowedForwarders The allowedForwarders property
    */
    private ?OnlineMeetingForwarders $allowedForwarders = null;
    
    /**
     * @var OnlineMeetingPresenters|null $allowedPresenters The allowedPresenters property
    */
    private ?OnlineMeetingPresenters $allowedPresenters = null;
    
    /**
     * @var bool|null $isCopyToClipboardEnabled The isCopyToClipboardEnabled property
    */
    private ?bool $isCopyToClipboardEnabled = null;
    
    /**
     * @var bool|null $isLobbyEnabled The isLobbyEnabled property
    */
    private ?bool $isLobbyEnabled = null;
    
    /**
     * @var LobbyBypassSettings|null $lobbyBypassSettings The lobbyBypassSettings property
    */
    private ?LobbyBypassSettings $lobbyBypassSettings = null;
    
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
        return $this->allowedForwarders;
    }

    /**
     * Gets the allowedPresenters property value. The allowedPresenters property
     * @return OnlineMeetingPresenters|null
    */
    public function getAllowedPresenters(): ?OnlineMeetingPresenters {
        return $this->allowedPresenters;
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
        return $this->isCopyToClipboardEnabled;
    }

    /**
     * Gets the isLobbyEnabled property value. The isLobbyEnabled property
     * @return bool|null
    */
    public function getIsLobbyEnabled(): ?bool {
        return $this->isLobbyEnabled;
    }

    /**
     * Gets the lobbyBypassSettings property value. The lobbyBypassSettings property
     * @return LobbyBypassSettings|null
    */
    public function getLobbyBypassSettings(): ?LobbyBypassSettings {
        return $this->lobbyBypassSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowedForwarders', $this->allowedForwarders);
        $writer->writeEnumValue('allowedPresenters', $this->allowedPresenters);
        $writer->writeBooleanValue('isCopyToClipboardEnabled', $this->isCopyToClipboardEnabled);
        $writer->writeBooleanValue('isLobbyEnabled', $this->isLobbyEnabled);
        $writer->writeObjectValue('lobbyBypassSettings', $this->lobbyBypassSettings);
    }

    /**
     * Sets the allowedForwarders property value. The allowedForwarders property
     *  @param OnlineMeetingForwarders|null $value Value to set for the allowedForwarders property.
    */
    public function setAllowedForwarders(?OnlineMeetingForwarders $value ): void {
        $this->allowedForwarders = $value;
    }

    /**
     * Sets the allowedPresenters property value. The allowedPresenters property
     *  @param OnlineMeetingPresenters|null $value Value to set for the allowedPresenters property.
    */
    public function setAllowedPresenters(?OnlineMeetingPresenters $value ): void {
        $this->allowedPresenters = $value;
    }

    /**
     * Sets the isCopyToClipboardEnabled property value. The isCopyToClipboardEnabled property
     *  @param bool|null $value Value to set for the isCopyToClipboardEnabled property.
    */
    public function setIsCopyToClipboardEnabled(?bool $value ): void {
        $this->isCopyToClipboardEnabled = $value;
    }

    /**
     * Sets the isLobbyEnabled property value. The isLobbyEnabled property
     *  @param bool|null $value Value to set for the isLobbyEnabled property.
    */
    public function setIsLobbyEnabled(?bool $value ): void {
        $this->isLobbyEnabled = $value;
    }

    /**
     * Sets the lobbyBypassSettings property value. The lobbyBypassSettings property
     *  @param LobbyBypassSettings|null $value Value to set for the lobbyBypassSettings property.
    */
    public function setLobbyBypassSettings(?LobbyBypassSettings $value ): void {
        $this->lobbyBypassSettings = $value;
    }

}
