<?php

namespace Microsoft\Graph\Beta\Generated\Me\ManagedDevices\MoveDevicesToOU;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MoveDevicesToOUPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $deviceIds The deviceIds property
    */
    private ?array $deviceIds = null;
    
    /**
     * @var string|null $organizationalUnitPath The organizationalUnitPath property
    */
    private ?string $organizationalUnitPath = null;
    
    /**
     * Instantiates a new moveDevicesToOUPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MoveDevicesToOUPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MoveDevicesToOUPostRequestBody {
        return new MoveDevicesToOUPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceIds property value. The deviceIds property
     * @return array<string>|null
    */
    public function getDeviceIds(): ?array {
        return $this->deviceIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceIds' => function (ParseNode $n) use ($o) { $o->setDeviceIds($n->getCollectionOfPrimitiveValues()); },
            'organizationalUnitPath' => function (ParseNode $n) use ($o) { $o->setOrganizationalUnitPath($n->getStringValue()); },
        ];
    }

    /**
     * Gets the organizationalUnitPath property value. The organizationalUnitPath property
     * @return string|null
    */
    public function getOrganizationalUnitPath(): ?string {
        return $this->organizationalUnitPath;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('deviceIds', $this->deviceIds);
        $writer->writeStringValue('organizationalUnitPath', $this->organizationalUnitPath);
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
     * Sets the deviceIds property value. The deviceIds property
     *  @param array<string>|null $value Value to set for the deviceIds property.
    */
    public function setDeviceIds(?array $value ): void {
        $this->deviceIds = $value;
    }

    /**
     * Sets the organizationalUnitPath property value. The organizationalUnitPath property
     *  @param string|null $value Value to set for the organizationalUnitPath property.
    */
    public function setOrganizationalUnitPath(?string $value ): void {
        $this->organizationalUnitPath = $value;
    }

}
