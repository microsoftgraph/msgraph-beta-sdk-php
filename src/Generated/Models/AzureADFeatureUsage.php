<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureADFeatureUsage extends Entity implements Parsable 
{
    /**
     * @var string|null $featureName The featureName property
    */
    private ?string $featureName = null;
    
    /**
     * @var DateTime|null $snapshotDateTime The snapshotDateTime property
    */
    private ?DateTime $snapshotDateTime = null;
    
    /**
     * @var int|null $usage The usage property
    */
    private ?int $usage = null;
    
    /**
     * Instantiates a new azureADFeatureUsage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureADFeatureUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureADFeatureUsage {
        return new AzureADFeatureUsage();
    }

    /**
     * Gets the featureName property value. The featureName property
     * @return string|null
    */
    public function getFeatureName(): ?string {
        return $this->featureName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'featureName' => function (ParseNode $n) use ($o) { $o->setFeatureName($n->getStringValue()); },
            'snapshotDateTime' => function (ParseNode $n) use ($o) { $o->setSnapshotDateTime($n->getDateTimeValue()); },
            'usage' => function (ParseNode $n) use ($o) { $o->setUsage($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the snapshotDateTime property value. The snapshotDateTime property
     * @return DateTime|null
    */
    public function getSnapshotDateTime(): ?DateTime {
        return $this->snapshotDateTime;
    }

    /**
     * Gets the usage property value. The usage property
     * @return int|null
    */
    public function getUsage(): ?int {
        return $this->usage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('featureName', $this->featureName);
        $writer->writeDateTimeValue('snapshotDateTime', $this->snapshotDateTime);
        $writer->writeIntegerValue('usage', $this->usage);
    }

    /**
     * Sets the featureName property value. The featureName property
     *  @param string|null $value Value to set for the featureName property.
    */
    public function setFeatureName(?string $value ): void {
        $this->featureName = $value;
    }

    /**
     * Sets the snapshotDateTime property value. The snapshotDateTime property
     *  @param DateTime|null $value Value to set for the snapshotDateTime property.
    */
    public function setSnapshotDateTime(?DateTime $value ): void {
        $this->snapshotDateTime = $value;
    }

    /**
     * Sets the usage property value. The usage property
     *  @param int|null $value Value to set for the usage property.
    */
    public function setUsage(?int $value ): void {
        $this->usage = $value;
    }

}
