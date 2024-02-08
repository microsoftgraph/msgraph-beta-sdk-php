<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TunnelConfigurationIKEv2Custom extends TunnelConfiguration implements Parsable 
{
    /**
     * Instantiates a new TunnelConfigurationIKEv2Custom and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.tunnelConfigurationIKEv2Custom');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TunnelConfigurationIKEv2Custom
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TunnelConfigurationIKEv2Custom {
        return new TunnelConfigurationIKEv2Custom();
    }

    /**
     * Gets the dhGroup property value. The dhGroup property
     * @return DhGroup|null
    */
    public function getDhGroup(): ?DhGroup {
        $val = $this->getBackingStore()->get('dhGroup');
        if (is_null($val) || $val instanceof DhGroup) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dhGroup'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dhGroup' => fn(ParseNode $n) => $o->setDhGroup($n->getEnumValue(DhGroup::class)),
            'ikeEncryption' => fn(ParseNode $n) => $o->setIkeEncryption($n->getEnumValue(IkeEncryption::class)),
            'ikeIntegrity' => fn(ParseNode $n) => $o->setIkeIntegrity($n->getEnumValue(IkeIntegrity::class)),
            'ipSecEncryption' => fn(ParseNode $n) => $o->setIpSecEncryption($n->getEnumValue(IpSecEncryption::class)),
            'ipSecIntegrity' => fn(ParseNode $n) => $o->setIpSecIntegrity($n->getEnumValue(IpSecIntegrity::class)),
            'pfsGroup' => fn(ParseNode $n) => $o->setPfsGroup($n->getEnumValue(PfsGroup::class)),
            'saLifeTimeSeconds' => fn(ParseNode $n) => $o->setSaLifeTimeSeconds($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the ikeEncryption property value. The ikeEncryption property
     * @return IkeEncryption|null
    */
    public function getIkeEncryption(): ?IkeEncryption {
        $val = $this->getBackingStore()->get('ikeEncryption');
        if (is_null($val) || $val instanceof IkeEncryption) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ikeEncryption'");
    }

    /**
     * Gets the ikeIntegrity property value. The ikeIntegrity property
     * @return IkeIntegrity|null
    */
    public function getIkeIntegrity(): ?IkeIntegrity {
        $val = $this->getBackingStore()->get('ikeIntegrity');
        if (is_null($val) || $val instanceof IkeIntegrity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ikeIntegrity'");
    }

    /**
     * Gets the ipSecEncryption property value. The ipSecEncryption property
     * @return IpSecEncryption|null
    */
    public function getIpSecEncryption(): ?IpSecEncryption {
        $val = $this->getBackingStore()->get('ipSecEncryption');
        if (is_null($val) || $val instanceof IpSecEncryption) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipSecEncryption'");
    }

    /**
     * Gets the ipSecIntegrity property value. The ipSecIntegrity property
     * @return IpSecIntegrity|null
    */
    public function getIpSecIntegrity(): ?IpSecIntegrity {
        $val = $this->getBackingStore()->get('ipSecIntegrity');
        if (is_null($val) || $val instanceof IpSecIntegrity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipSecIntegrity'");
    }

    /**
     * Gets the pfsGroup property value. The pfsGroup property
     * @return PfsGroup|null
    */
    public function getPfsGroup(): ?PfsGroup {
        $val = $this->getBackingStore()->get('pfsGroup');
        if (is_null($val) || $val instanceof PfsGroup) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pfsGroup'");
    }

    /**
     * Gets the saLifeTimeSeconds property value. a standard specifiying Security Association lifetime with recommended values from an RFC standard.
     * @return int|null
    */
    public function getSaLifeTimeSeconds(): ?int {
        $val = $this->getBackingStore()->get('saLifeTimeSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'saLifeTimeSeconds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('dhGroup', $this->getDhGroup());
        $writer->writeEnumValue('ikeEncryption', $this->getIkeEncryption());
        $writer->writeEnumValue('ikeIntegrity', $this->getIkeIntegrity());
        $writer->writeEnumValue('ipSecEncryption', $this->getIpSecEncryption());
        $writer->writeEnumValue('ipSecIntegrity', $this->getIpSecIntegrity());
        $writer->writeEnumValue('pfsGroup', $this->getPfsGroup());
        $writer->writeIntegerValue('saLifeTimeSeconds', $this->getSaLifeTimeSeconds());
    }

    /**
     * Sets the dhGroup property value. The dhGroup property
     * @param DhGroup|null $value Value to set for the dhGroup property.
    */
    public function setDhGroup(?DhGroup $value): void {
        $this->getBackingStore()->set('dhGroup', $value);
    }

    /**
     * Sets the ikeEncryption property value. The ikeEncryption property
     * @param IkeEncryption|null $value Value to set for the ikeEncryption property.
    */
    public function setIkeEncryption(?IkeEncryption $value): void {
        $this->getBackingStore()->set('ikeEncryption', $value);
    }

    /**
     * Sets the ikeIntegrity property value. The ikeIntegrity property
     * @param IkeIntegrity|null $value Value to set for the ikeIntegrity property.
    */
    public function setIkeIntegrity(?IkeIntegrity $value): void {
        $this->getBackingStore()->set('ikeIntegrity', $value);
    }

    /**
     * Sets the ipSecEncryption property value. The ipSecEncryption property
     * @param IpSecEncryption|null $value Value to set for the ipSecEncryption property.
    */
    public function setIpSecEncryption(?IpSecEncryption $value): void {
        $this->getBackingStore()->set('ipSecEncryption', $value);
    }

    /**
     * Sets the ipSecIntegrity property value. The ipSecIntegrity property
     * @param IpSecIntegrity|null $value Value to set for the ipSecIntegrity property.
    */
    public function setIpSecIntegrity(?IpSecIntegrity $value): void {
        $this->getBackingStore()->set('ipSecIntegrity', $value);
    }

    /**
     * Sets the pfsGroup property value. The pfsGroup property
     * @param PfsGroup|null $value Value to set for the pfsGroup property.
    */
    public function setPfsGroup(?PfsGroup $value): void {
        $this->getBackingStore()->set('pfsGroup', $value);
    }

    /**
     * Sets the saLifeTimeSeconds property value. a standard specifiying Security Association lifetime with recommended values from an RFC standard.
     * @param int|null $value Value to set for the saLifeTimeSeconds property.
    */
    public function setSaLifeTimeSeconds(?int $value): void {
        $this->getBackingStore()->set('saLifeTimeSeconds', $value);
    }

}
