<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureADPremiumLicenseInsight extends Entity implements Parsable 
{
    /**
     * Instantiates a new AzureADPremiumLicenseInsight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureADPremiumLicenseInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureADPremiumLicenseInsight {
        return new AzureADPremiumLicenseInsight();
    }

    /**
     * Gets the entitledP1LicenseCount property value. The number of Microsoft Entra ID P1 licenses entitled to the tenant.
     * @return int|null
    */
    public function getEntitledP1LicenseCount(): ?int {
        $val = $this->getBackingStore()->get('entitledP1LicenseCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entitledP1LicenseCount'");
    }

    /**
     * Gets the entitledP2LicenseCount property value. The number of Microsoft Entra ID P2 licenses entitled to the tenant.
     * @return int|null
    */
    public function getEntitledP2LicenseCount(): ?int {
        $val = $this->getBackingStore()->get('entitledP2LicenseCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entitledP2LicenseCount'");
    }

    /**
     * Gets the entitledTotalLicenseCount property value. The total number of Microsoft Entra ID premium licenses (P1 + P2) entitled to the tenant.
     * @return int|null
    */
    public function getEntitledTotalLicenseCount(): ?int {
        $val = $this->getBackingStore()->get('entitledTotalLicenseCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entitledTotalLicenseCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'entitledP1LicenseCount' => fn(ParseNode $n) => $o->setEntitledP1LicenseCount($n->getIntegerValue()),
            'entitledP2LicenseCount' => fn(ParseNode $n) => $o->setEntitledP2LicenseCount($n->getIntegerValue()),
            'entitledTotalLicenseCount' => fn(ParseNode $n) => $o->setEntitledTotalLicenseCount($n->getIntegerValue()),
            'internetAccessFeatureUtilizations' => fn(ParseNode $n) => $o->setInternetAccessFeatureUtilizations($n->getObjectValue([InternetAccessFeatureUtilizations::class, 'createFromDiscriminatorValue'])),
            'p1FeatureUtilizations' => fn(ParseNode $n) => $o->setP1FeatureUtilizations($n->getObjectValue([AzureADPremiumP1FeatureUtilizations::class, 'createFromDiscriminatorValue'])),
            'p2FeatureUtilizations' => fn(ParseNode $n) => $o->setP2FeatureUtilizations($n->getObjectValue([AzureADPremiumP2FeatureUtilizations::class, 'createFromDiscriminatorValue'])),
            'privateAccessFeatureUtilizations' => fn(ParseNode $n) => $o->setPrivateAccessFeatureUtilizations($n->getObjectValue([PrivateAccessFeatureUtilizations::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the internetAccessFeatureUtilizations property value. The utilization data for Microsoft Entra Internet Access features.
     * @return InternetAccessFeatureUtilizations|null
    */
    public function getInternetAccessFeatureUtilizations(): ?InternetAccessFeatureUtilizations {
        $val = $this->getBackingStore()->get('internetAccessFeatureUtilizations');
        if (is_null($val) || $val instanceof InternetAccessFeatureUtilizations) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internetAccessFeatureUtilizations'");
    }

    /**
     * Gets the p1FeatureUtilizations property value. The p1FeatureUtilizations property
     * @return AzureADPremiumP1FeatureUtilizations|null
    */
    public function getP1FeatureUtilizations(): ?AzureADPremiumP1FeatureUtilizations {
        $val = $this->getBackingStore()->get('p1FeatureUtilizations');
        if (is_null($val) || $val instanceof AzureADPremiumP1FeatureUtilizations) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'p1FeatureUtilizations'");
    }

    /**
     * Gets the p2FeatureUtilizations property value. The p2FeatureUtilizations property
     * @return AzureADPremiumP2FeatureUtilizations|null
    */
    public function getP2FeatureUtilizations(): ?AzureADPremiumP2FeatureUtilizations {
        $val = $this->getBackingStore()->get('p2FeatureUtilizations');
        if (is_null($val) || $val instanceof AzureADPremiumP2FeatureUtilizations) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'p2FeatureUtilizations'");
    }

    /**
     * Gets the privateAccessFeatureUtilizations property value. The utilization data for Microsoft Entra Private Access features.
     * @return PrivateAccessFeatureUtilizations|null
    */
    public function getPrivateAccessFeatureUtilizations(): ?PrivateAccessFeatureUtilizations {
        $val = $this->getBackingStore()->get('privateAccessFeatureUtilizations');
        if (is_null($val) || $val instanceof PrivateAccessFeatureUtilizations) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privateAccessFeatureUtilizations'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('entitledP1LicenseCount', $this->getEntitledP1LicenseCount());
        $writer->writeIntegerValue('entitledP2LicenseCount', $this->getEntitledP2LicenseCount());
        $writer->writeIntegerValue('entitledTotalLicenseCount', $this->getEntitledTotalLicenseCount());
        $writer->writeObjectValue('internetAccessFeatureUtilizations', $this->getInternetAccessFeatureUtilizations());
        $writer->writeObjectValue('p1FeatureUtilizations', $this->getP1FeatureUtilizations());
        $writer->writeObjectValue('p2FeatureUtilizations', $this->getP2FeatureUtilizations());
        $writer->writeObjectValue('privateAccessFeatureUtilizations', $this->getPrivateAccessFeatureUtilizations());
    }

    /**
     * Sets the entitledP1LicenseCount property value. The number of Microsoft Entra ID P1 licenses entitled to the tenant.
     * @param int|null $value Value to set for the entitledP1LicenseCount property.
    */
    public function setEntitledP1LicenseCount(?int $value): void {
        $this->getBackingStore()->set('entitledP1LicenseCount', $value);
    }

    /**
     * Sets the entitledP2LicenseCount property value. The number of Microsoft Entra ID P2 licenses entitled to the tenant.
     * @param int|null $value Value to set for the entitledP2LicenseCount property.
    */
    public function setEntitledP2LicenseCount(?int $value): void {
        $this->getBackingStore()->set('entitledP2LicenseCount', $value);
    }

    /**
     * Sets the entitledTotalLicenseCount property value. The total number of Microsoft Entra ID premium licenses (P1 + P2) entitled to the tenant.
     * @param int|null $value Value to set for the entitledTotalLicenseCount property.
    */
    public function setEntitledTotalLicenseCount(?int $value): void {
        $this->getBackingStore()->set('entitledTotalLicenseCount', $value);
    }

    /**
     * Sets the internetAccessFeatureUtilizations property value. The utilization data for Microsoft Entra Internet Access features.
     * @param InternetAccessFeatureUtilizations|null $value Value to set for the internetAccessFeatureUtilizations property.
    */
    public function setInternetAccessFeatureUtilizations(?InternetAccessFeatureUtilizations $value): void {
        $this->getBackingStore()->set('internetAccessFeatureUtilizations', $value);
    }

    /**
     * Sets the p1FeatureUtilizations property value. The p1FeatureUtilizations property
     * @param AzureADPremiumP1FeatureUtilizations|null $value Value to set for the p1FeatureUtilizations property.
    */
    public function setP1FeatureUtilizations(?AzureADPremiumP1FeatureUtilizations $value): void {
        $this->getBackingStore()->set('p1FeatureUtilizations', $value);
    }

    /**
     * Sets the p2FeatureUtilizations property value. The p2FeatureUtilizations property
     * @param AzureADPremiumP2FeatureUtilizations|null $value Value to set for the p2FeatureUtilizations property.
    */
    public function setP2FeatureUtilizations(?AzureADPremiumP2FeatureUtilizations $value): void {
        $this->getBackingStore()->set('p2FeatureUtilizations', $value);
    }

    /**
     * Sets the privateAccessFeatureUtilizations property value. The utilization data for Microsoft Entra Private Access features.
     * @param PrivateAccessFeatureUtilizations|null $value Value to set for the privateAccessFeatureUtilizations property.
    */
    public function setPrivateAccessFeatureUtilizations(?PrivateAccessFeatureUtilizations $value): void {
        $this->getBackingStore()->set('privateAccessFeatureUtilizations', $value);
    }

}
