<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesDirectorySynchronizationConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var OnPremisesAccidentalDeletionPrevention|null $accidentalDeletionPrevention The accidentalDeletionPrevention property
    */
    private ?OnPremisesAccidentalDeletionPrevention $accidentalDeletionPrevention = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateInterval|null $customerRequestedSynchronizationInterval The customerRequestedSynchronizationInterval property
    */
    private ?DateInterval $customerRequestedSynchronizationInterval = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateInterval|null $synchronizationInterval The synchronizationInterval property
    */
    private ?DateInterval $synchronizationInterval = null;
    
    /**
     * Instantiates a new onPremisesDirectorySynchronizationConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.onPremisesDirectorySynchronizationConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesDirectorySynchronizationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesDirectorySynchronizationConfiguration {
        return new OnPremisesDirectorySynchronizationConfiguration();
    }

    /**
     * Gets the accidentalDeletionPrevention property value. The accidentalDeletionPrevention property
     * @return OnPremisesAccidentalDeletionPrevention|null
    */
    public function getAccidentalDeletionPrevention(): ?OnPremisesAccidentalDeletionPrevention {
        return $this->accidentalDeletionPrevention;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the customerRequestedSynchronizationInterval property value. The customerRequestedSynchronizationInterval property
     * @return DateInterval|null
    */
    public function getCustomerRequestedSynchronizationInterval(): ?DateInterval {
        return $this->customerRequestedSynchronizationInterval;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accidentalDeletionPrevention' => fn(ParseNode $n) => $o->setAccidentalDeletionPrevention($n->getObjectValue([OnPremisesAccidentalDeletionPrevention::class, 'createFromDiscriminatorValue'])),
            'customerRequestedSynchronizationInterval' => fn(ParseNode $n) => $o->setCustomerRequestedSynchronizationInterval($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'synchronizationInterval' => fn(ParseNode $n) => $o->setSynchronizationInterval($n->getDateIntervalValue()),
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
     * Gets the synchronizationInterval property value. The synchronizationInterval property
     * @return DateInterval|null
    */
    public function getSynchronizationInterval(): ?DateInterval {
        return $this->synchronizationInterval;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accidentalDeletionPrevention', $this->accidentalDeletionPrevention);
        $writer->writeDateIntervalValue('customerRequestedSynchronizationInterval', $this->customerRequestedSynchronizationInterval);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateIntervalValue('synchronizationInterval', $this->synchronizationInterval);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accidentalDeletionPrevention property value. The accidentalDeletionPrevention property
     *  @param OnPremisesAccidentalDeletionPrevention|null $value Value to set for the accidentalDeletionPrevention property.
    */
    public function setAccidentalDeletionPrevention(?OnPremisesAccidentalDeletionPrevention $value ): void {
        $this->accidentalDeletionPrevention = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the customerRequestedSynchronizationInterval property value. The customerRequestedSynchronizationInterval property
     *  @param DateInterval|null $value Value to set for the customerRequestedSynchronizationInterval property.
    */
    public function setCustomerRequestedSynchronizationInterval(?DateInterval $value ): void {
        $this->customerRequestedSynchronizationInterval = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the synchronizationInterval property value. The synchronizationInterval property
     *  @param DateInterval|null $value Value to set for the synchronizationInterval property.
    */
    public function setSynchronizationInterval(?DateInterval $value ): void {
        $this->synchronizationInterval = $value;
    }

}
