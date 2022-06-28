<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoteAssistanceSettings extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowSessionsToUnenrolledDevices Indicates if sessions to unenrolled devices are allowed for the account. This setting is configurable by the admin. Default value is false.
    */
    private ?bool $allowSessionsToUnenrolledDevices = null;
    
    /**
     * @var RemoteAssistanceState|null $remoteAssistanceState The current state of remote assistance for the account. Possible values are: disabled, enabled. This setting is configurable by the admin. Remote assistance settings that have not yet been configured by the admin have a disabled state. Returned by default. Possible values are: disabled, enabled.
    */
    private ?RemoteAssistanceState $remoteAssistanceState = null;
    
    /**
     * Instantiates a new RemoteAssistanceSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowSessionsToUnenrolledDevices' => function (ParseNode $n) use ($o) { $o->setAllowSessionsToUnenrolledDevices($n->getBooleanValue()); },
            'remoteAssistanceState' => function (ParseNode $n) use ($o) { $o->setRemoteAssistanceState($n->getEnumValue(RemoteAssistanceState::class)); },
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
