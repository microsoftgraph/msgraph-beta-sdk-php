<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoteAssistanceSettings extends Entity 
{
    /** @var bool|null $allowSessionsToUnenrolledDevices Indicates if sessions to unenrolled devices are allowed for the account. This setting is configurable by the admin. Default value is false. */
    private ?bool $allowSessionsToUnenrolledDevices = null;
    
    /** @var RemoteAssistanceState|null $remoteAssistanceState The current state of remote assistance for the account. Possible values are: disabled, enabled. This setting is configurable by the admin. Remote assistance settings that have not yet been configured by the admin have a disabled state. Returned by default. Possible values are: disabled, enabled. */
    private ?RemoteAssistanceState $remoteAssistanceState = null;
    
    /**
     * Instantiates a new remoteAssistanceSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteAssistanceSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RemoteAssistanceSettings {
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'allowSessionsToUnenrolledDevices' => function (self $o, ParseNode $n) { $o->setAllowSessionsToUnenrolledDevices($n->getBooleanValue()); },
            'remoteAssistanceState' => function (self $o, ParseNode $n) { $o->setRemoteAssistanceState($n->getEnumValue(RemoteAssistanceState::class)); },
        ]);
    }

    /**
     * Gets the remoteAssistanceState property value. The current state of remote assistance for the account. Possible values are: disabled, enabled. This setting is configurable by the admin. Remote assistance settings that have not yet been configured by the admin have a disabled state. Returned by default. Possible values are: disabled, enabled.
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
     * Sets the remoteAssistanceState property value. The current state of remote assistance for the account. Possible values are: disabled, enabled. This setting is configurable by the admin. Remote assistance settings that have not yet been configured by the admin have a disabled state. Returned by default. Possible values are: disabled, enabled.
     *  @param RemoteAssistanceState|null $value Value to set for the remoteAssistanceState property.
    */
    public function setRemoteAssistanceState(?RemoteAssistanceState $value ): void {
        $this->remoteAssistanceState = $value;
    }

}
