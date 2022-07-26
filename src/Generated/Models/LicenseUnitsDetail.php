<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LicenseUnitsDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $enabled The number of units that are enabled for the active subscription of the service SKU.
    */
    private ?int $enabled = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $suspended The number of units that are suspended because the subscription of the service SKU has been cancelled. The units cannot be assigned but can still be reactivated before they are deleted.
    */
    private ?int $suspended = null;
    
    /**
     * @var int|null $warning The number of units that are in warning status. When the subscription of the service SKU has expired, the customer has a grace period to renew their subscription before it is cancelled (moved to a suspended state).
    */
    private ?int $warning = null;
    
    /**
     * Instantiates a new licenseUnitsDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.licenseUnitsDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LicenseUnitsDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LicenseUnitsDetail {
        return new LicenseUnitsDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the enabled property value. The number of units that are enabled for the active subscription of the service SKU.
     * @return int|null
    */
    public function getEnabled(): ?int {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabled' => function (ParseNode $n) use ($o) { $o->setEnabled($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'suspended' => function (ParseNode $n) use ($o) { $o->setSuspended($n->getIntegerValue()); },
            'warning' => function (ParseNode $n) use ($o) { $o->setWarning($n->getIntegerValue()); },
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
     * Gets the suspended property value. The number of units that are suspended because the subscription of the service SKU has been cancelled. The units cannot be assigned but can still be reactivated before they are deleted.
     * @return int|null
    */
    public function getSuspended(): ?int {
        return $this->suspended;
    }

    /**
     * Gets the warning property value. The number of units that are in warning status. When the subscription of the service SKU has expired, the customer has a grace period to renew their subscription before it is cancelled (moved to a suspended state).
     * @return int|null
    */
    public function getWarning(): ?int {
        return $this->warning;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('enabled', $this->enabled);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('suspended', $this->suspended);
        $writer->writeIntegerValue('warning', $this->warning);
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
     * Sets the enabled property value. The number of units that are enabled for the active subscription of the service SKU.
     *  @param int|null $value Value to set for the enabled property.
    */
    public function setEnabled(?int $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the suspended property value. The number of units that are suspended because the subscription of the service SKU has been cancelled. The units cannot be assigned but can still be reactivated before they are deleted.
     *  @param int|null $value Value to set for the suspended property.
    */
    public function setSuspended(?int $value ): void {
        $this->suspended = $value;
    }

    /**
     * Sets the warning property value. The number of units that are in warning status. When the subscription of the service SKU has expired, the customer has a grace period to renew their subscription before it is cancelled (moved to a suspended state).
     *  @param int|null $value Value to set for the warning property.
    */
    public function setWarning(?int $value ): void {
        $this->warning = $value;
    }

}
