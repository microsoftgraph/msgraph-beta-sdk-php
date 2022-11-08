<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoteAssistanceSettings extends Entity implements Parsable 
{
    /**
     * @var bool|null $allowSessionsToUnenrolledDevices Indicates if sessions to unenrolled devices are allowed for the account. This setting is configurable by the admin. Default value is false.
    */
    private ?bool $allowSessionsToUnenrolledDevices = null;
    
    /**
     * @var bool|null $blockChat Indicates if sessions to block chat function. This setting is configurable by the admin. Default value is false.
    */
    private ?bool $blockChat = null;
    
    /**
     * @var RemoteAssistanceState|null $remoteAssistanceState State of remote assistance for the account
    */
    private ?RemoteAssistanceState $remoteAssistanceState = null;
    
    /**
     * Instantiates a new remoteAssistanceSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.remoteAssistanceSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteAssistanceSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoteAssistanceSettings {
        return new RemoteAssistanceSettings();
    }

    /**
     * Gets the allowSessionsToUnenrolledDevices property value. Indicates if sessions to unenrolled devices are allowed for the account. This setting is configurable by the admin. Default value is false.
     * @return bool|null
    */
    public function getAllowSessionsToUnenrolledDevices(): ?bool {
        return $this->allowSessionsToUnenrolledDevices;
    }

    /**
     * Gets the blockChat property value. Indicates if sessions to block chat function. This setting is configurable by the admin. Default value is false.
     * @return bool|null
    */
    public function getBlockChat(): ?bool {
        return $this->blockChat;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowSessionsToUnenrolledDevices' => fn(ParseNode $n) => $o->setAllowSessionsToUnenrolledDevices($n->getBooleanValue()),
            'blockChat' => fn(ParseNode $n) => $o->setBlockChat($n->getBooleanValue()),
            'remoteAssistanceState' => fn(ParseNode $n) => $o->setRemoteAssistanceState($n->getEnumValue(RemoteAssistanceState::class)),
        ]);
    }

    /**
     * Gets the remoteAssistanceState property value. State of remote assistance for the account
     * @return RemoteAssistanceState|null
    */
    public function getRemoteAssistanceState(): ?RemoteAssistanceState {
        return $this->remoteAssistanceState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowSessionsToUnenrolledDevices', $this->allowSessionsToUnenrolledDevices);
        $writer->writeBooleanValue('blockChat', $this->blockChat);
        $writer->writeEnumValue('remoteAssistanceState', $this->remoteAssistanceState);
    }

    /**
     * Sets the allowSessionsToUnenrolledDevices property value. Indicates if sessions to unenrolled devices are allowed for the account. This setting is configurable by the admin. Default value is false.
     *  @param bool|null $value Value to set for the allowSessionsToUnenrolledDevices property.
    */
    public function setAllowSessionsToUnenrolledDevices(?bool $value ): void {
        $this->allowSessionsToUnenrolledDevices = $value;
    }

    /**
     * Sets the blockChat property value. Indicates if sessions to block chat function. This setting is configurable by the admin. Default value is false.
     *  @param bool|null $value Value to set for the blockChat property.
    */
    public function setBlockChat(?bool $value ): void {
        $this->blockChat = $value;
    }

    /**
     * Sets the remoteAssistanceState property value. State of remote assistance for the account
     *  @param RemoteAssistanceState|null $value Value to set for the remoteAssistanceState property.
    */
    public function setRemoteAssistanceState(?RemoteAssistanceState $value ): void {
        $this->remoteAssistanceState = $value;
    }

}
