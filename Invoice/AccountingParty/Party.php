<?php

namespace Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingParty;

use JMS\Serializer\Annotation as Serializer;
use Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingParty\PartyName\PartyName;
use Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingParty\PartyTaxScheme\PartyTaxScheme;
use Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingParty\PostalAddress\PostalAddress;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", prefix="cac")
 *
 * Class Party
 * @package Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingParty
 */
class Party
{
    /**
     * @Serializer\Type("Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingParty\PartyName\PartyName")
     * @Serializer\SerializedName("PartyName")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     *
     * @var PartyName
     */
    private $partyName;

    /**
     * @Serializer\Type("Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingParty\PostalAddress\PostalAddress")
     * @Serializer\SerializedName("PostalAddress")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     *
     * @var PostalAddress
     */
    private $postalAddress;

    /**
     * @Serializer\Type("Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingParty\PartyTaxScheme\PartyTaxScheme")
     * @Serializer\SerializedName("PartyTaxScheme")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     *
     * @var PartyTaxScheme
     */
    private $partyTaxScheme;

    /**
     * @return PartyName
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * @param PartyName $partyName
     */
    public function setPartyName(PartyName $partyName)
    {
        $this->partyName = $partyName;
    }

    /**
     * @return PostalAddress
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * @param PostalAddress $postalAddress
     */
    public function setPostalAddress(PostalAddress $postalAddress)
    {
        $this->postalAddress = $postalAddress;
    }

    /**
     * @return PartyTaxScheme
     */
    public function getPartyTaxScheme()
    {
        return $this->partyTaxScheme;
    }

    /**
     * @param PartyTaxScheme $partyTaxScheme
     */
    public function setPartyTaxScheme(PartyTaxScheme $partyTaxScheme)
    {
        $this->partyTaxScheme = $partyTaxScheme;
    }
}