<?php

namespace Microsoft\Graph\Beta\Generated\Models\Search;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentitySet implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Identity|null $application The application property
    */
    private ?Identity $application = null;
    
    /**
     * @var Identity|null $device The device property
    */
    private ?Identity $device = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var Identity|null $user The user property
    */
    private ?Identity $user = null;
    
    /**
     * Instantiates a new identitySet and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.search.identitySet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentitySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentitySet {
        return new IdentitySet();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the application property value. The application property
     * @return Identity|null
    */
    public function getApplication(): ?Identity {
        return $this->application;
    }

    /**
     * Gets the device property value. The device property
     * @return Identity|null
    */
    public function getDevice(): ?Identity {
        return $this->device;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'application' => function (ParseNode $n) use ($o) { $o->setApplication($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'device' => function (ParseNode $n) use ($o) { $o->setDevice($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'user' => function (ParseNode $n) use ($o) { $o->setUser($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the user property value. The user property
     * @return Identity|null
    */
    public function getUser(): ?Identity {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('application', $this->application);
        $writer->writeObjectValue('device', $this->device);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('user', $this->user);
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
     * Sets the application property value. The application property
     *  @param Identity|null $value Value to set for the application property.
    */
    public function setApplication(?Identity $value ): void {
        $this->application = $value;
    }

    /**
     * Sets the device property value. The device property
     *  @param Identity|null $value Value to set for the device property.
    */
    public function setDevice(?Identity $value ): void {
        $this->device = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the user property value. The user property
     *  @param Identity|null $value Value to set for the user property.
    */
    public function setUser(?Identity $value ): void {
        $this->user = $value;
    }

}
